<?php

namespace App\Repositories;

use App\Interfaces\JenisHewanRepositoryInterface;
use App\Models\MstJenisHewan;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class JenisHewanRepository implements JenisHewanRepositoryInterface
{
    public function getAll(int $perPage = 10): LengthAwarePaginator
    {
        return MstJenisHewan::with('ras')->paginate($perPage);
    }

    public function getById(int $id): ?MstJenisHewan
    {
        return MstJenisHewan::with('ras')->find($id);
    }

    public function create(array $data): MstJenisHewan
    {
        return MstJenisHewan::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $jenisHewan = MstJenisHewan::find($id);
        return $jenisHewan ? $jenisHewan->update($data) : false;
    }

    public function delete(int $id): bool
    {
        return MstJenisHewan::destroy($id);
    }

    public function search(string $query): Collection
    {
        return MstJenisHewan::where('nama', 'like', "%{$query}%")
            ->orWhere('deskripsi', 'like', "%{$query}%")
            ->get();
    }
}