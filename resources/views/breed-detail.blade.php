<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $breed->nama_ras }} - Pet Guild</title>
    <link rel="stylesheet" href="/css/home.css">
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .breed-header {
            display: flex;
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .breed-image {
            width: 400px;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }
        
        .breed-info {
            flex: 1;
        }
        
        .back-button {
            display: inline-block;
            padding: 8px 16px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        .back-button:hover {
            background-color: #0056b3;
        }
        
        .animals-section {
            margin-top: 40px;
        }
        
        .animals-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        
        .animal-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .animal-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .animal-details {
            padding: 15px;
        }
        
        .admin-link {
            margin-top: 40px;
            text-align: right;
        }
        
        .admin-button {
            display: inline-block;
            padding: 8px 16px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        
        .admin-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <header>
        <div class="admin-login">
            <a href="{{ route('admin.login') }}" class="admin-btn">Login Admin</a>
        </div>
        <h1 class="title">PET GUILD</h1>
        <p class="subtitle">Temukan Informasi Tentang Hewanmu</p>
    </header>

    <div class="container">
        <a href="/" class="back-button">← Kembali ke Beranda</a>
        
        <div class="breed-header">
            <img src="{{ asset('images/breeds/' . strtolower(str_replace(' ', '-', $breed->nama_ras)) . '.jpg') }}" 
                 alt="{{ $breed->nama_ras }}" class="breed-image"
                 onerror="this.onerror=null; this.src='https://via.placeholder.com/400x300?text={{ $breed->nama_ras }}';">
            
            <div class="breed-info">
                <h1>{{ $breed->nama_ras }}</h1>
                <p><strong>Jenis Hewan:</strong> {{ $breed->jenisHewan->nama }}</p>
                <div class="breed-description">
                    {{ $breed->deskripsi ?? 'Belum ada deskripsi untuk ras ini.' }}
                </div>
            </div>
        </div>
        
        <div class="animals-section">
            <h2>{{ $breed->nama_ras }} yang Tersedia</h2>
            
            @if($breed->hewan->count() > 0)
                <div class="animals-grid">
                    @foreach($breed->hewan as $hewan)
                        <div class="animal-card">
                            <img src="{{ asset($hewan->gambar_utama) }}" alt="{{ $hewan->nama }}" class="animal-image"
                                 onerror="this.onerror=null; this.src='https://via.placeholder.com/300x200?text={{ $hewan->nama }}';">
                            <div class="animal-details">
                                <h3>{{ $hewan->nama }}</h3>
                                <p>{{ \Illuminate\Support\Str::limit($hewan->biografi, 100) }}</p>
                                @if($hewan->umur_min_perawatan || $hewan->umur_max_perawatan)
                                    <p><strong>Umur Perawatan:</strong> 
                                        {{ $hewan->umur_min_perawatan ?? '0' }} - 
                                        {{ $hewan->umur_max_perawatan ?? '∞' }} bulan
                                    </p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p>Belum ada hewan dari ras ini yang ditambahkan.</p>
            @endif
        </div>
        
        <div class="admin-link">
            <a href="{{ route('admin.hewan.create') }}" class="admin-button">Tambah {{ $breed->nama_ras }} Baru</a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const adminButton = document.querySelector('.admin-button');
            
            // Only show admin button if logged in
            if (adminButton) {
                // You might want to add server-side check for logged in admin
                // This is just a placeholder for client-side logic
                const isAdminLoggedIn = {{ auth()->check() && auth()->user()->isAdmin ? 'true' : 'false' }};
                if (!isAdminLoggedIn) {
                    adminButton.style.display = 'none';
                }
            }
        });
    </script>
</body>
</html>
