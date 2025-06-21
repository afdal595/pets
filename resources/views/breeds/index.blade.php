<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Ras Hewan - Pet Guild</title>
    <link rel="stylesheet" href="/css/home.css">
    <style>
        .breeds-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .filter-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .search-box {
            flex: 1;
            max-width: 400px;
        }

        .search-box input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .filter-buttons {
            display: flex;
            gap: 10px;
        }

        .filter-btn {
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            background-color: #ddd;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .filter-btn:hover {
            background-color: #4CAF50;
            color: white;
        }

        .filter-btn.active {
            background-color: #4CAF50;
            color: white;
        }

        .breeds-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .breed-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .breed-card:hover {
            transform: translateY(-5px);
        }

        .breed-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .breed-info {
            padding: 20px;
        }

        .breed-name {
            font-size: 1.5rem;
            margin-bottom: 5px;
            color: #333;
        }

        .breed-type {
            display: inline-block;
            padding: 3px 8px;
            background-color: #e0e0e0;
            border-radius: 3px;
            font-size: 0.8rem;
            margin-bottom: 10px;
        }

        .breed-description {
            color: #666;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .detail-btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .detail-btn:hover {
            background-color: #45a049;
        }

        @media (max-width: 768px) {
            .filter-section {
                flex-direction: column;
                align-items: stretch;
            }
            
            .search-box {
                max-width: 100%;
            }
            
            .breeds-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="admin-login">
            <a href="{{ route('admin.login') }}" class="admin-btn">Login Admin</a>
        </div>
        <h1 class="title">PET GUILD</h1>
        <p class="subtitle">Katalog Ras Hewan Peliharaan</p>
    </header>

    <main>
        <div class="breeds-container">
            <a href="/" class="detail-btn" style="margin-bottom: 20px;">← Kembali ke Beranda</a>
            
            <div class="filter-section">
                <div class="search-box">
                    <input type="text" id="searchInput" placeholder="Cari ras hewan...">
                </div>
                <div class="filter-buttons">
                    <button class="filter-btn active" onclick="filterBreeds('all')">Semua</button>
                    <button class="filter-btn" onclick="filterBreeds('dog')">Anjing</button>
                    <button class="filter-btn" onclick="filterBreeds('cat')">Kucing</button>
                </div>
            </div>

            <div class="breeds-grid">
                <!-- Persian Card -->
                <div class="breed-card" data-type="cat">
                    <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?w=400&h=300&fit=crop" 
                         alt="Kucing Persian" 
                         class="breed-image">
                    <div class="breed-info">
                        <h3 class="breed-name">Persian</h3>
                        <span class="breed-type">Kucing</span>
                        <p class="breed-description">Si Anggun dengan Bulu Panjang yang Menawan. Dikenal dengan wajah bulat yang lucu dan bulu yang lebat.</p>
                        <a href="/breeds/persian" class="detail-btn">Lihat Detail</a>
                    </div>
                </div>

                <!-- Anggora Card -->
                <div class="breed-card" data-type="cat">
                    <img src="https://images.unsplash.com/photo-1599572739984-8ae9388f23b5?w=400&h=300&fit=crop" 
                         alt="Kucing Anggora" 
                         class="breed-image">
                    <div class="breed-info">
                        <h3 class="breed-name">Anggora</h3>
                        <span class="breed-type">Kucing</span>
                        <p class="breed-description">Si Cantik dari Turki. Terkenal dengan bulu putih halus, tubuh ramping, dan sifat yang lincah.</p>
                        <a href="/breeds/anggora" class="detail-btn">Lihat Detail</a>
                    </div>
                </div>

                <!-- Domestik Card -->
                <div class="breed-card" data-type="cat">
                    <img src="https://images.unsplash.com/photo-1574144611937-0df059b5ef3e?w=400&h=300&fit=crop" 
                         alt="Kucing Domestik" 
                         class="breed-image">
                    <div class="breed-info">
                        <h3 class="breed-name">Domestik</h3>
                        <span class="breed-type">Kucing</span>
                        <p class="breed-description">Si Penyayang dan Mudah Beradaptasi. Kucing lokal dengan kepribadian menarik dan daya tahan tubuh yang kuat.</p>
                        <a href="/breeds/domestik" class="detail-btn">Lihat Detail</a>
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
        // Live search functionality
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const cards = document.querySelectorAll('.breed-card');
            
            cards.forEach(card => {
                const breedName = card.querySelector('.breed-name').textContent.toLowerCase();
                const breedDesc = card.querySelector('.breed-description').textContent.toLowerCase();
                const breedType = card.querySelector('.breed-type').textContent.toLowerCase();
                
                if (breedName.includes(searchTerm) || breedDesc.includes(searchTerm) || breedType.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Filter breeds by type
        function filterBreeds(type) {
            const cards = document.querySelectorAll('.breed-card');
            const buttons = document.querySelectorAll('.filter-btn');
            
            // Update active button
            buttons.forEach(btn => {
                btn.classList.remove('active');
                if (btn.textContent.toLowerCase().includes(type)) {
                    btn.classList.add('active');
                }
            });
            
            // Filter cards
            cards.forEach(card => {
                if (type === 'all' || card.dataset.type === type) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
