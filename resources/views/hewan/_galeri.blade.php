@if($hewan->galeri->isEmpty())
    <div class="alert alert-info">
        <i class="fas fa-info-circle me-2"></i> Belum ada gambar galeri
    </div>
@else
    <div class="row row-cols-2 row-cols-md-3 g-2">
        @foreach($hewan->galeri as $gambar)
        <div class="col">
            <div class="card border-0 shadow-sm">
                <img src="{{ asset('storage/'.$gambar->gambar) }}" 
                     class="card-img-top" 
                     style="height: 120px; object-fit: cover;" 
                     alt="{{ $gambar->judul }}">
                <div class="card-body p-2">
                    <h6 class="card-title mb-1">{{ $gambar->judul }}</h6>
                    <p class="card-text small text-muted mb-1">{{ Str::limit($gambar->deskripsi, 50) }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endif

@can('create', App\Models\GaleriHewan::class)
<div class="mt-3">
    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#tambahGaleriModal">
        <i class="fas fa-plus me-1"></i> Tambah Gambar
    </button>
</div>

<!-- Modal Tambah Gambar -->
<div class="modal fade" id="tambahGaleriModal" tabindex="-1" aria-labelledby="tambahGaleriModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="hewan_id" value="{{ $hewan->id }}">
                
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahGaleriModalLabel">Tambah Gambar Galeri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" name="gambar" id="gambar" accept="image/*" required>
                        <small class="text-muted">Format: JPG, PNG (max 2MB)</small>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endcan