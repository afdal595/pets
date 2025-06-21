<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Hewan - Pet Guild</title>
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/breed-detail.css">
</head>
<body>
    <header>
        <div class="admin-login">
            <a href="{{ route('admin.login') }}" class="admin-btn">Login Admin</a>
        </div>
        <h1 class="title">PET GUILD</h1>
        <p class="subtitle">Detail Hewan</p>
    </header>

    <main>
        <div class="container">
            <a href="/" class="back-btn">← Kembali ke Beranda</a>
            
            <div class="breed-detail-container">
                <div id="breed-tabs" class="detail-tabs">
                    <button type="button" onclick="showTab('biografi')" class="tab-btn active">Biografi</button>
                    <button type="button" onclick="showTab('perawatan')" class="tab-btn">Perawatan</button>
                    <button type="button" onclick="showTab('makanan')" class="tab-btn">Makanan</button>
                    <button type="button" onclick="showTab('peralatan')" class="tab-btn">Peralatan</button>
                    <button type="button" onclick="showTab('gambar')" class="tab-btn">Galeri</button>
                </div>

                <div id="biografi" class="tab-content active">
                    <img src="{{ $hewan['gambar'] ?? 'https://api.placeholder.com/400/320' }}" alt="{{ $hewan['nama'] }}" class="detail-image">
                    <div class="detail-text">
                        <h2>{{ $hewan['nama'] }}</h2>
                        <p>{{ $hewan['biografi'] }}</p>
                    </div>
                </div>

                <div id="perawatan" class="tab-content">
                    <h2>Tips Perawatan {{ $hewan['nama'] }}</h2>
                    {!! $hewan['perawatan'] !!}
                </div>

                <div id="makanan" class="tab-content">
                    <h2>Panduan Makanan {{ $hewan['nama'] }}</h2>
                    {!! $hewan['makanan'] !!}
                </div>

                <div id="peralatan" class="tab-content">
                    <h2>Peralatan untuk {{ $hewan['nama'] }}</h2>
                    <div class="equipment">
                        @forelse($hewan['peralatan'] as $alat)
                        <div class="equipment-card">
                            <img src="{{ $alat['gambar'] ?? 'https://api.placeholder.com/400/320' }}" alt="{{ $alat['nama'] }}" class="equipment-img">
                            <div class="equipment-info">
                                <h3 class="equipment-name">{{ $alat['nama'] }}</h3>
                                <p class="equipment-price">Rp {{ number_format($alat['harga_min'], 0, ',', '.') }} - Rp {{ number_format($alat['harga_max'], 0, ',', '.') }}</p>
                                <p class="equipment-description">{{ $alat['deskripsi'] }}</p>
                            </div>
                        </div>
                        @empty
                        <p>Belum ada data peralatan untuk ras ini.</p>
                        @endforelse
                    </div>
                </div>

                <div id="gambar" class="tab-content">
                    <h2>Galeri {{ $hewan['nama'] }}</h2>
                    <div class="gallery">
                        @forelse($hewan['galeri'] as $foto)
                        <img src="{{ $foto['url'] ?? 'https://api.placeholder.com/400/320' }}" alt="{{ $hewan['nama'] }}" class="gallery-img">
                        @empty
                        <p>Belum ada foto dalam galeri.</p>
                        @endforelse
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
            // Nonaktifkan semua tab content
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });
            
            // Aktifkan tab content yang dipilih
            const selectedTab = document.getElementById(tabName);
            if (selectedTab) {
                selectedTab.classList.add('active');
            }

            // Update status aktif pada button tab
            const tabButtons = document.querySelectorAll('.tab-btn');
            tabButtons.forEach(button => {
                button.classList.remove('active');
                if (button.textContent.toLowerCase().includes(tabName.toLowerCase())) {
                    button.classList.add('active');
                }
            });
        }
    </script>
</body>
</html>
