<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\MstUser;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of users (Admin only).
     */
    public function index(): JsonResponse
    {
        $this->authorize('viewAny', MstUser::class);
        
        $users = MstUser::query()
            ->latest()
            ->filter(request(['search', 'role']))
            ->paginate(10);

        return response()->json([
            'success' => true,
            'data' => UserResource::collection($users),
            'message' => 'Daftar pengguna berhasil diambil'
        ]);
    }

    /**
     * Register new user.
     */
    public function store(StoreUserRequest $request): JsonResponse
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        
        // Set default role if not provided
        $data['role'] = $data['role'] ?? 'user';
        
        // Handle avatar upload
        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $user = MstUser::create($data);

        return response()->json([
            'success' => true,
            'data' => new UserResource($user),
            'message' => 'Registrasi berhasil'
        ], 201);
    }

    /**
     * Display user details.
     */
    public function show(MstUser $user): JsonResponse
    {
        $this->authorize('view', $user);

        return response()->json([
            'success' => true,
            'data' => new UserResource($user->load('pencarianLogs')),
            'message' => 'Detail pengguna berhasil diambil'
        ]);
    }

    /**
     * Update user data.
     */
    public function update(UpdateUserRequest $request, MstUser $user): JsonResponse
    {
        $this->authorize('update', $user);

        $data = $request->validated();
        
        // Handle password update
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        // Handle avatar update
        if ($request->hasFile('avatar')) {
            // Delete old avatar if exists
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $user->update($data);

        return response()->json([
            'success' => true,
            'data' => new UserResource($user),
            'message' => 'Data pengguna berhasil diperbarui'
        ]);
    }

    /**
     * Delete user (Admin only).
     */
    public function destroy(MstUser $user): JsonResponse
    {
        $this->authorize('delete', $user);
        
        // Delete avatar if exists
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'Pengguna berhasil dihapus'
        ]);
    }

    /**
     * Get current authenticated user.
     */
    public function me(): JsonResponse
    {
        $user = auth()->user();
        
        return response()->json([
            'success' => true,
            'data' => new UserResource($user->load('pencarianLogs')),
            'message' => 'Data pengguna saat ini'
        ]);
    }

    /**
     * Update user profile (without authorization check).
     */
    public function updateProfile(UpdateUserRequest $request): JsonResponse
    {
        $user = auth()->user();
        $data = $request->validated();
        
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $user->update($data);

        return response()->json([
            'success' => true,
            'data' => new UserResource($user),
            'message' => 'Profil berhasil diperbarui'
        ]);
    }
}