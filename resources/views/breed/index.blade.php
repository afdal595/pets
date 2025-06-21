<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Ras Hewan - Pet Guild</title>
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/breed-detail.css">
</head>
<body>
    <header>
        <div class="admin-login">
            <a href="{{ route('admin.login') }}" class="admin-btn">Login Admin</a>
        </div>
        <h1 class="title">PET GUILD</h1>
        <p class="subtitle">Informasi Ras Hewan</p>
    </header>

    <main>
        <div class="container">
            <a href="/" class="back-btn">← Kembali ke Beranda</a>
            
            <!-- Filter dan Pencarian -->
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

            <!-- Daftar Ras -->
            <div class="breeds-grid">
                @foreach($breeds as $breed)
                <div class="breed-card" data-type="{{ $breed->jenisHewan->nama === 'Anjing' ? 'dog' : 'cat' }}">
                    <img src="{{ $breed->gambar ?? 'https://api.placeholder.com/400/320' }}" 
                         alt="{{ $breed->nama }}" 
                         class="breed-image">
                    <div class="breed-info">
                        <h3 class="breed-name">{{ $breed->nama }}</h3>
                        <span class="breed-type">{{ $breed->jenisHewan->nama }}</span>
                        <p class="breed-description">{{ \Str::limit($breed->deskripsi, 100) }}</p>
                        <a href="{{ route('breed.show', ['breed' => \Str::slug($breed->nama)]) }}" 
                           class="detail-btn">Lihat Detail</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Pet Guild. All rights reserved.</p>
        <p>Informasi yang disediakan di situs ini hanya untuk tujuan edukasi.</p>
    </footer>

    <script>
        // Fungsi untuk filter ras berdasarkan jenis
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

        // Live search functionality
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const cards = document.querySelectorAll('.breed-card');
            
            cards.forEach(card => {
                const breedName = card.querySelector('.breed-name').textContent.toLowerCase();
                const breedDesc = card.querySelector('.breed-description').textContent.toLowerCase();
                
                if (breedName.includes(searchTerm) || breedDesc.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
