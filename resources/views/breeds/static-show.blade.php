<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $breed['nama'] }} - Pet Guild</title>
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
            color: #495057;
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

        .stat-card h3 {
            margin: 0 0 10px 0;
            color: #007bff;
            font-size: 1.1em;
        }

        .stat-card p {
            margin: 0;
            color: #666;
        }

        .tab-container {
            margin-top: 40px;
        }

        .tab-buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
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

        .charakteristik-list {
            list-style: none;
            padding: 0;
        }

        .charakteristik-list li {
            background: #e9ecef;
            margin: 5px 0;
            padding: 8px 15px;
            border-radius: 15px;
            display: inline-block;
            margin-right: 10px;
            font-size: 0.9em;
        }

        .perawatan-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .perawatan-item {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #007bff;
        }

        .perawatan-item h3 {
            color: #007bff;
            margin-bottom: 15px;
        }

        .back-button {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .back-button:hover {
            background: #5a6268;
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
                flex: none;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .tab-buttons {
                flex-direction: column;
            }

            .perawatan-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="nav-brand">
                <h1>Pet Guild</h1>
            </div>
            <div class="nav-links">
                <a href="/">Home</a>
                <a href="{{ route('breeds.index') }}">Breeds</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="breed-container">
            <a href="/" class="back-button">← Kembali ke Home</a>
            
            <div class="breed-header">
                <div class="breed-image-container">
                    <img src="{{ asset($breed['gambar']) }}" alt="{{ $breed['nama'] }}" class="breed-main-image">
                </div>
                
                <div class="breed-info">
                    <h1 class="breed-name">{{ $breed['nama'] }}</h1>
                    <span class="breed-type">{{ $breed['jenis'] }}</span>
                    
                    <div class="breed-stats">
                        <div class="stats-grid">
                            <div class="stat-card">
                                <h3>Ukuran</h3>
                                <p>{{ $breed['ukuran'] }}</p>
                            </div>
                            <div class="stat-card">
                                <h3>Berat</h3>
                                <p>{{ $breed['berat'] }}</p>
                            </div>
                            <div class="stat-card">
                                <h3>Tinggi</h3>
                                <p>{{ $breed['tinggi'] }}</p>
                            </div>
                            <div class="stat-card">
                                <h3>Harapan Hidup</h3>
                                <p>{{ $breed['harapan_hidup'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-container">
                <div class="tab-buttons">
                    <button class="tab-btn active" onclick="showTab('biografi')">Biografi</button>
                    <button class="tab-btn" onclick="showTab('perawatan')">Perawatan</button>
                    <button class="tab-btn" onclick="showTab('galeri')">Galeri</button>
                </div>

                <div id="biografi" class="tab-content active">
                    <h2>Tentang {{ $breed['nama'] }}</h2>
                    <p>{{ $breed['deskripsi'] }}</p>
                    
                    <div class="karakteristik">
                        <h3>Karakteristik Utama:</h3>
                        <ul class="charakteristik-list">
                            @foreach(explode(',', $breed['karakteristik']) as $karakteristik)
                                <li>{{ trim($karakteristik) }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div id="perawatan" class="tab-content">
                    <h2>Panduan Perawatan {{ $breed['nama'] }}</h2>
                    <div class="perawatan-grid">
                        <div class="perawatan-item">
                            <h3>🧼 Grooming</h3>
                            <p>{{ $breed['perawatan']['grooming'] }}</p>
                        </div>
                        <div class="perawatan-item">
                            <h3>🏃 Olahraga</h3>
                            <p>{{ $breed['perawatan']['olahraga'] }}</p>
                        </div>
                        <div class="perawatan-item">
                            <h3>❤️ Kesehatan</h3>
                            <p>{{ $breed['perawatan']['kesehatan'] }}</p>
                        </div>
                    </div>
                </div>

                <div id="galeri" class="tab-content">
                    <h2>Galeri Foto {{ $breed['nama'] }}</h2>
                    <div class="gallery-grid">
                        @foreach($breed['galeri'] as $foto)
                        <div class="gallery-item">
                            <img src="{{ asset($foto) }}" alt="{{ $breed['nama'] }}" class="gallery-image" onclick="showFullImage('{{ asset($foto) }}')">
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
            // Open image in new tab
            window.open(src, '_blank');
        }
    </script>
</body>
</html>
