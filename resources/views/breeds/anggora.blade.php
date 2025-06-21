<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kucing Anggora - Panduan Lengkap Ras Kucing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
            background-image: linear-gradient(315deg, #f5f5f5 0%, #e0e0e0 74%);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background: linear-gradient(135deg, #8e44ad 0%, #9b59b6 100%);
            color: white;
            padding: 40px 0;
            text-align: center;
            margin-bottom: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(142, 68, 173, 0.2);
            position: relative;
            overflow: hidden;
        }

        .header:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 100%);
            pointer-events: none;
        }

        .header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .back-btn {
            display: inline-block;
            background: #8e44ad;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 25px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background: #9b59b6;
            transform: translateY(-2px);
        }

        .main-image-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .main-image {
            width: 100%;
            max-width: 800px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, opacity 0.5s ease;
            opacity: 0;
        }

        .main-image.loaded {
            opacity: 1;
        }

        .main-image:hover {
            transform: scale(1.01);
        }

        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .section {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(142, 68, 173, 0.1);
        }

        .section:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(142, 68, 173, 0.15);
        }

        .section-title {
            color: #8e44ad;
            font-size: 2rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .section-title i {
            margin-right: 10px;
            font-size: 1.5rem;
        }

        .bio-text {
            margin-bottom: 25px;
            font-size: 1.05rem;
        }

        .characteristics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 25px;
        }

        .characteristic-item {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.05);
        }

        .characteristic-item h4 {
            color: #8e44ad;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .care-list {
            list-style: none;
            margin: 20px 0;
        }

        .care-list li {
            margin-bottom: 15px;
            padding-left: 30px;
            position: relative;
        }

        .care-list li:before {
            content: "✓";
            color: #8e44ad;
            position: absolute;
            left: 0;
            font-weight: bold;
        }

        .care-list li strong {
            display: block;
            margin-bottom: 5px;
            color: #8e44ad;
        }

        .food-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .food-item {
            background: #fff3cd;
            border: 2px solid #ffc107;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .food-item i {
            font-size: 2.5rem;
            color: #ffc107;
            margin-bottom: 15px;
        }

        .food-item h4 {
            color: #2980b9;
            margin-bottom: 10px;
        }

        .equipment-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .equipment-item {
            background: #f8f9fa;
            border: 2px solid #8e44ad;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .equipment-item:hover {
            transform: scale(1.05);
            background: #e3f2fd;
        }

        .equipment-item i {
            font-size: 2.5rem;
            color: #8e44ad;
            margin-bottom: 15px;
        }

        .equipment-item h4 {
            color: #8e44ad;
            margin-bottom: 10px;
        }

        .gallery-section {
            grid-column: 1 / -1;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            border: 3px solid white;
        }

        .gallery-item:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 20px rgba(142, 68, 173, 0.2);
        }

        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(142, 68, 173, 0.9), transparent);
            color: white;
            padding: 20px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        .gallery-overlay h4 {
            font-size: 1.2rem;
            margin-bottom: 8px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        }

        .gallery-overlay p {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .warning-box {
            background: #fff3cd;
            border: 2px solid #ffc107;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .warning-box i {
            color: #856404;
            margin-right: 10px;
        }

        .info-box {
            background: #e3f2fd;
            border: 2px solid #8e44ad;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .info-box i {
            color: #8e44ad;
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 1.5rem;
            }
            
            .container {
                padding: 10px;
            }
            
            .section {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('home') }}" class="back-btn">
            <i class="fas fa-arrow-left"></i> Kembali ke Beranda
        </a>

        <header class="header">
            <h1>Kucing Anggora</h1>
            <p>Panduan Lengkap Perawatan dan Informasi Ras Kucing Anggora</p>
        </header>

        <div class="main-image-section">
            <img src="https://images.unsplash.com/photo-1599572739984-8ae9388f23b5?w=800&h=400&fit=crop" 
                 alt="Kucing Anggora" 
                 class="main-image">
        </div>

        <div class="content-grid">
            <!-- BIOGRAFI SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-book"></i>
                    Profil & Karakteristik
                </h2>
                
                <div class="bio-text">
                    <p>Kucing Anggora merupakan salah satu ras kucing tertua yang berasal dari Ankara (dahulu Angora), Turki. Dikenal dengan keanggunan dan bulu panjangnya yang mempesona, ras ini telah menjadi bagian dari sejarah kucing peliharaan selama berabad-abad.</p>
                    
                    <p>Ciri khas utama Anggora adalah bulu halus seperti sutra yang panjang dan tubuh yang ramping namun berotot. Kepala berbentuk segitiga dengan telinga runcing yang tinggi menjadi penanda khas ras ini.</p>
                </div>

                <div class="characteristics-grid">
                    <div class="characteristic-item">
                        <h4><i class="fas fa-ruler-combined"></i> Ukuran</h4>
                        <p><strong>Jantan:</strong> 4.5-5.5 kg<br>
                        <strong>Betina:</strong> 3.5-4.5 kg</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-ruler-vertical"></i> Tinggi</h4>
                        <p>25-30 cm (dewasa)</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-clock"></i> Usia</h4>
                        <p>12-18 tahun dengan perawatan optimal</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-palette"></i> Warna</h4>
                        <p>Putih (klasik), hitam, abu-abu, dan kombinasi</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-heart"></i> Temperamen</h4>
                        <p>Cerdas, lincah, penuh kasih sayang, suka bermain</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-running"></i> Aktivitas</h4>
                        <p>Energi tinggi, suka memanjat dan bermain</p>
                    </div>
                </div>

                <div class="warning-box">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong>Penting:</strong> Anggora asli memiliki standar yang spesifik dan berbeda dari kucing berbulu panjang biasa. Pastikan mendapatkan Anggora dari peternak terpercaya.
                </div>
            </div>

            <!-- PERAWATAN SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-heart"></i>
                    Panduan Perawatan
                </h2>
                <ul class="care-list">
                    <li>
                        <strong>Perawatan Bulu</strong>
                        <p>Sisir bulu setiap hari menggunakan sisir khusus untuk mencegah kusut. Mandi setiap 4-6 minggu dengan sampo khusus kucing berbulu panjang.</p>
                    </li>
                    <li>
                        <strong>Kebersihan</strong>
                        <p>Bersihkan mata dan telinga secara rutin. Potong kuku setiap 2 minggu dan sikat gigi 2-3 kali seminggu.</p>
                    </li>
                    <li>
                        <strong>Aktivitas</strong>
                        <p>Sediakan waktu bermain minimal 30 menit sehari. Anggora butuh aktivitas fisik dan mental yang cukup.</p>
                    </li>
                    <li>
                        <strong>Pemeriksaan Rutin</strong>
                        <p>Kunjungi dokter hewan setiap 6 bulan untuk pemeriksaan kesehatan dan vaksinasi rutin.</p>
                    </li>
                </ul>

                <div class="info-box">
                    <i class="fas fa-lightbulb"></i>
                    <strong>Tips:</strong> Anggora sangat menyukai ketinggian. Sediakan pohon kucing atau area memanjat yang aman di rumah.
                </div>
            </div>

            <!-- NUTRISI SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-utensils"></i>
                    Nutrisi
                </h2>
                <div class="food-grid">
                    <div class="food-item">
                        <i class="fas fa-drumstick-bite"></i>
                        <h4>Protein Premium</h4>
                        <p>35-40% protein hewani berkualitas tinggi untuk kesehatan bulu dan otot</p>
                    </div>
                    <div class="food-item">
                        <i class="fas fa-fish"></i>
                        <h4>Asam Lemak Esensial</h4>
                        <p>Omega 3 & 6 untuk bulu berkilau dan kulit sehat</p>
                    </div>
                    <div class="food-item">
                        <i class="fas fa-tint"></i>
                        <h4>Hidrasi</h4>
                        <p>Air segar dan bersih sepanjang waktu</p>
                    </div>
                </div>

                <div class="characteristics-grid">
                    <div class="characteristic-item">
                        <h4><i class="fas fa-baby"></i> Kitten (2-12 bulan)</h4>
                        <p><strong>Porsi:</strong> 40-60g per hari<br>
                        <strong>Frekuensi:</strong> 3-4 kali sehari<br>
                        <strong>Protein:</strong> 35-40%</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-cat"></i> Dewasa (1-7 tahun)</h4>
                        <p><strong>Porsi:</strong> 60-80g per hari<br>
                        <strong>Frekuensi:</strong> 2 kali sehari<br>
                        <strong>Protein:</strong> 30-35%</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-user-clock"></i> Senior (7+ tahun)</h4>
                        <p><strong>Porsi:</strong> 50-70g per hari<br>
                        <strong>Frekuensi:</strong> 2-3 kali sehari<br>
                        <strong>Protein:</strong> 28-32%</p>
                    </div>
                </div>

                <div class="warning-box">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong>Penting:</strong> Sesuaikan porsi makanan dengan aktivitas dan berat badan ideal. Hindari makanan manusia.
                </div>
            </div>

            <!-- PERALATAN SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-box"></i>
                    Peralatan Wajib
                </h2>
                <div class="equipment-grid">
                    <div class="equipment-item">
                        <i class="fas fa-brush"></i>
                        <h4>Set Grooming</h4>
                        <p>Sisir, sikat, dan peralatan grooming khusus bulu panjang</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-box"></i>
                        <h4>Litterbox Premium</h4>
                        <p>Kotak pasir tertutup dengan filter</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-tree"></i>
                        <h4>Cat Tree</h4>
                        <p>Pohon kucing dengan berbagai level</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-wind"></i>
                        <h4>Hair Dryer</h4>
                        <p>Pengering bulu khusus kucing</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-home"></i>
                        <h4>Area Istirahat</h4>
                        <p>Tempat tidur nyaman dan hangat</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-gamepad"></i>
                        <h4>Mainan Interaktif</h4>
                        <p>Berbagai mainan untuk stimulasi mental</p>
                    </div>
                </div>

                <div class="info-box">
                    <i class="fas fa-lightbulb"></i>
                    <strong>Rekomendasi:</strong> Investasi dalam peralatan grooming berkualitas akan menghemat biaya perawatan jangka panjang.
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add some interactive functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling for anchor links
            const links = document.querySelectorAll('a[href^="#"]');
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Add loading animation for images
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                img.addEventListener('load', function() {
                    this.classList.add('loaded');
                });
            });
        });
    </script>
</body>
</html>
