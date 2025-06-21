<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $breed->nama }} - Pet Guild</title>
    <link rel="stylesheet" href="/css/home.css">
    <style>
        .breed-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .breed-header {
            display: flex;
            gap: 40px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .breed-image-container {
            flex: 0 0 400px;
        }

        .breed-main-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .breed-info {
            flex: 1;
            min-width: 300px;
        }

        .breed-name {
            font-size: 2.5em;
            margin: 0 0 10px 0;
            color: #333;
        }

        .breed-type {
            display: inline-block;
            padding: 8px 16px;
            background-color: #e9ecef;
            border-radius: 20px;
            font-size: 1em;
            margin-bottom: 20px;
        }

        .breed-stats {
            margin-bottom: 20px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .stat-card {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }

        .tab-container {
            margin-top: 40px;
        }

        .tab-buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .tab-btn {
            padding: 10px 20px;
            border: none;
            background: #f0f0f0;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tab-btn.active {
            background: #007bff;
            color: white;
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.3s ease;
        }

        .tab-content.active {
            display: block;
        }

        .care-guide {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .care-item {
            margin-bottom: 20px;
        }

        .care-item h3 {
            color: #007bff;
            margin-bottom: 10px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .gallery-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .gallery-image:hover {
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @media (max-width: 768px) {
            .breed-header {
                flex-direction: column;
            }
            
            .breed-image-container {
                flex: 0 0 100%;
            }
            
            .breed-main-image {
                height: 250px;
            }
        }

        .perawatan-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .perawatan-item {
            background: #fff;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .makanan-grid, .peralatan-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .makanan-card, .peralatan-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .makanan-card img, .peralatan-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .makanan-info, .peralatan-info {
            padding: 15px;
        }

        .harga {
            display: block;
            color: #007bff;
            font-weight: bold;
            margin-top: 10px;
        }

        .galeri-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .galeri-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .galeri-item img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <header>
        <div class="admin-login">
            <a href="{{ route('admin.login') }}" class="admin-btn">Login Admin</a>
        </div>
        <h1 class="title">PET GUILD</h1>
        <p class="subtitle">Detail Ras Hewan</p>
    </header>

    <main>
        <div class="breed-container">
            <a href="{{ route('breeds.index') }}" class="detail-btn" style="margin-bottom: 20px;">← Kembali ke Katalog</a>

            <div class="breed-header">
                <div class="breed-image-container">
                    <img src="{{ $breed->gambar_thumbnail }}" alt="{{ $breed->nama }}" class="breed-main-image">
                </div>

                <div class="breed-info">
                    <h1 class="breed-name">{{ $breed->nama }}</h1>
                    <span class="breed-type">{{ $breed->jenisHewan->nama }}</span>
                    
                    <div class="breed-description">
                        {{ $breed->deskripsi }}
                    </div>

                    <div class="stats-grid">
                        <div class="stat-card">
                            <h3>Temperamen</h3>
                            <p>{{ $breed->karakteristik ?? 'Belum tersedia' }}</p>
                        </div>
                        @if($breed->umur_min_perawatan || $breed->umur_max_perawatan)
                        <div class="stat-card">
                            <h3>Rentang Perawatan</h3>
                            <p>{{ $breed->umur_min_perawatan ?? '0' }} - {{ $breed->umur_max_perawatan ?? '∞' }} bulan</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="tab-container">
                <div class="tab-buttons">
                    <button class="tab-btn active" onclick="showTab('biografi')">Biografi</button>
                    <button class="tab-btn" onclick="showTab('perawatan')">Perawatan</button>
                    <button class="tab-btn" onclick="showTab('makanan')">Makanan</button>
                    <button class="tab-btn" onclick="showTab('peralatan')">Peralatan</button>
                    <button class="tab-btn" onclick="showTab('galeri')">Galeri</button>
                </div>

                <div id="biografi" class="tab-content active">
                    <h2>Tentang {{ $breed->nama }}</h2>
                    <p>{{ $breed->deskripsi }}</p>
                    <div class="karakteristik">
                        <h3>Karakteristik Utama:</h3>
                        <ul>
                            @foreach(explode(',', $breed->karakteristik ?? '') as $karakteristik)
                                <li>{{ trim($karakteristik) }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div id="perawatan" class="tab-content">
                    <h2>Panduan Perawatan</h2>
                    <div class="perawatan-grid">
                        <div class="perawatan-item">
                            <h3>Grooming</h3>
                            <p>{{ $breed->grooming_info ?? 'Informasi grooming belum tersedia' }}</p>
                        </div>
                        <div class="perawatan-item">
                            <h3>Olahraga</h3>
                            <p>{{ $breed->exercise_info ?? 'Informasi olahraga belum tersedia' }}</p>
                        </div>
                        <div class="perawatan-item">
                            <h3>Kesehatan</h3>
                            <p>{{ $breed->health_info ?? 'Informasi kesehatan belum tersedia' }}</p>
                        </div>
                    </div>
                </div>

                <div id="makanan" class="tab-content">
                    <h2>Rekomendasi Makanan</h2>
                    <div class="makanan-grid">
                        @foreach($breed->makanan ?? [] as $makanan)
                        <div class="makanan-card">
                            <img src="{{ asset('storage/'.$makanan->foto) }}" alt="{{ $makanan->nama }}">
                            <div class="makanan-info">
                                <h3>{{ $makanan->nama }}</h3>
                                <p>{{ $makanan->deskripsi }}</p>
                                <span class="harga">Rp {{ number_format($makanan->harga, 0, ',', '.') }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div id="peralatan" class="tab-content">
                    <h2>Peralatan yang Dibutuhkan</h2>
                    <div class="peralatan-grid">
                        @foreach($breed->peralatan ?? [] as $peralatan)
                        <div class="peralatan-card">
                            <img src="{{ asset('storage/'.$peralatan->foto) }}" alt="{{ $peralatan->nama }}">
                            <div class="peralatan-info">
                                <h3>{{ $peralatan->nama }}</h3>
                                <p>{{ $peralatan->deskripsi }}</p>
                                <span class="harga">Rp {{ number_format($peralatan->harga, 0, ',', '.') }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div id="galeri" class="tab-content">
                    <h2>Galeri Foto</h2>
                    <div class="galeri-grid">
                        @foreach($breed->galeriHewan ?? [] as $foto)
                        <div class="galeri-item">
                            <img src="{{ asset('storage/'.$foto->foto) }}" alt="{{ $breed->nama }}">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Pet Guild. All rights reserved.</p>
        <p>Informasi yang disediakan di situs ini hanya untuk tujuan edukasi.</p>
    </footer>

    <script>
        function showTab(tabName) {
            // Hide all tabs
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            
            // Remove active class from all buttons
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            
            // Show selected tab
            document.getElementById(tabName).classList.add('active');
            
            // Add active class to clicked button
            event.target.classList.add('active');
        }

        function showFullImage(src) {
            // You could implement a lightbox here
            window.open(src, '_blank');
        }
    </script>
</body>
</html>
