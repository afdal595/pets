<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kucing Domestik - Panduan Lengkap Ras Kucing</title>
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

        .back-btn {
            display: inline-block;
            background: #2ecc71;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 25px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .back-btn:hover {
            background: #27ae60;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(46, 204, 113, 0.2);
        }

        .header {
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            color: white;
            padding: 40px 0;
            text-align: center;
            margin-bottom: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(46, 204, 113, 0.2);
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
            font-weight: bold;
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
        }

        .main-image-section {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .main-image {
            width: 100%;
            max-width: 800px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            opacity: 0;
            animation: fadeIn 1s ease-out forwards;
        }

        .main-image.loaded {
            opacity: 1;
        }

        .main-image:hover {
            transform: scale(1.02);
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
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
            border: 1px solid rgba(46, 204, 113, 0.1);
            opacity: 0;
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .section:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(46, 204, 113, 0.15);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-title {
            color: #2ecc71;
            font-size: 2rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
            position: relative;
            padding-bottom: 10px;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: #2ecc71;
            border-radius: 2px;
        }

        .section-title i {
            margin-right: 10px;
            font-size: 1.5rem;
        }

        .bio-text {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .characteristics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .characteristic-item {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            border: 1px solid rgba(46, 204, 113, 0.1);
        }

        .characteristic-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(46, 204, 113, 0.1);
        }

        .characteristic-item h4 {
            color: #2ecc71;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.1rem;
        }

        .characteristic-item h4 i {
            color: #2ecc71;
            font-size: 1.2rem;
        }

        .warning-box {
            background: #fff3cd;
            border: 2px solid #ffc107;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            transition: all 0.3s ease;
        }

        .warning-box:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.2);
        }

        .warning-box i {
            color: #856404;
            margin-right: 10px;
        }

        .info-box {
            background: #e8f5e9;
            border: 2px solid #2ecc71;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            transition: all 0.3s ease;
        }

        .info-box:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(46, 204, 113, 0.2);
        }

        .info-box i {
            color: #2ecc71;
            margin-right: 10px;
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
            color: #2ecc71;
            position: absolute;
            left: 0;
            font-weight: bold;
        }

        .care-list li strong {
            display: block;
            margin-bottom: 5px;
            color: #2ecc71;
            font-size: 1.1rem;
        }

        .info-box {
            background: #e8f5e9;
            border: 2px solid #2ecc71;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .food-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .food-item {
            background: #fff3cd;
            border: 2px solid #2ecc71;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .food-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(46, 204, 113, 0.1);
        }

        .food-item i {
            font-size: 2.5rem;
            color: #2ecc71;
            margin-bottom: 15px;
        }

        .food-item h4 {
            color: #2ecc71;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }

        .equipment-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .equipment-item {
            background: #f8f9fa;
            border: 2px solid #2ecc71;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .equipment-item:hover {
            transform: scale(1.05);
            background: #e8f5e9;
        }

        .equipment-item i {
            font-size: 2.5rem;
            color: #2ecc71;
            margin-bottom: 15px;
        }

        .equipment-item h4 {
            color: #2ecc71;
            margin-bottom: 10px;
            font-size: 1.2rem;
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
            box-shadow: 0 10px 20px rgba(46, 204, 113, 0.2);
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
            background: linear-gradient(to top, rgba(46, 204, 113, 0.9), transparent);
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
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('home') }}" class="back-btn">
            <i class="fas fa-arrow-left"></i> Kembali ke Beranda
        </a>

        <header class="header">
            <h1>Kucing Domestik</h1>
            <p>Panduan Lengkap Perawatan dan Informasi Kucing Domestik Indonesia</p>
        </header>

        <div class="main-image-section">
            <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-4.0.3" 
                 alt="Kucing Domestik" 
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
                    <p>Kucing Domestik atau yang lebih dikenal sebagai kucing kampung di Indonesia, adalah jenis kucing yang paling umum dan adaptif. Meskipun bukan ras murni, kucing domestik memiliki daya tahan tubuh yang kuat dan kemampuan adaptasi yang luar biasa terhadap berbagai kondisi lingkungan.</p>
                    
                    <p>Keunggulan kucing domestik terletak pada sistem kekebalan tubuhnya yang kuat, kepribadian yang ramah, dan kemampuan bertahan hidup yang tinggi dalam berbagai kondisi cuaca tropis Indonesia. Mereka juga dikenal sebagai kucing yang cerdas dan mudah beradaptasi dengan lingkungan baru.</p>
                </div>

                <div class="characteristics-grid">
                    <div class="characteristic-item">
                        <h4><i class="fas fa-ruler-combined"></i> Ukuran</h4>
                        <p><strong>Jantan:</strong> 3-5 kg<br>
                        <strong>Betina:</strong> 2-4 kg</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-ruler-vertical"></i> Tinggi</h4>
                        <p>20-25 cm (dewasa)</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-clock"></i> Usia</h4>
                        <p>12-15 tahun dengan perawatan baik</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-palette"></i> Warna</h4>
                        <p>Sangat beragam: hitam, putih, abu-abu, oranye, belang</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-heart"></i> Temperamen</h4>
                        <p>Ramah, mandiri, mudah beradaptasi</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-running"></i> Aktivitas</h4>
                        <p>Energi sedang hingga tinggi, lincah</p>
                    </div>
                </div>

                <div class="warning-box">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong>Penting:</strong> Meski memiliki daya tahan tubuh yang baik, kucing domestik tetap membutuhkan perawatan rutin untuk hidup sehat dan bahagia.
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
                        <strong>Perawatan Dasar</strong>
                        <p>Sisir bulu 1-2 kali seminggu. Mandi setiap 1-2 bulan atau saat diperlukan dengan sampo kucing yang lembut.</p>
                    </li>
                    <li>
                        <strong>Kebersihan</strong>
                        <p>Bersihkan telinga dan periksa gigi secara rutin. Jaga kebersihan kotak pasir dengan membersihkan setiap hari.</p>
                    </li>
                    <li>
                        <strong>Kesehatan</strong>
                        <p>Vaksinasi rutin dan pemeriksaan ke dokter hewan setahun sekali. Berikan obat cacing setiap 3 bulan.</p>
                    </li>
                    <li>
                        <strong>Aktivitas</strong>
                        <p>Sediakan waktu bermain 15-30 menit sehari untuk menjaga kesehatan fisik dan mental.</p>
                    </li>
                </ul>

                <div class="info-box">
                    <i class="fas fa-lightbulb"></i>
                    <strong>Tips:</strong> Kucing domestik sangat sosial. Luangkan waktu untuk berinteraksi dan bermain bersama mereka setiap hari.
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
                        <h4>Protein Seimbang</h4>
                        <p>30-35% protein hewani untuk energi optimal</p>
                    </div>
                    <div class="food-item">
                        <i class="fas fa-fish"></i>
                        <h4>Makanan Bervariasi</h4>
                        <p>Kombinasi makanan kering dan basah</p>
                    </div>
                    <div class="food-item">
                        <i class="fas fa-tint"></i>
                        <h4>Air Bersih</h4>
                        <p>Air segar sepanjang waktu</p>
                    </div>
                </div>

                <div class="characteristics-grid">
                    <div class="characteristic-item">
                        <h4><i class="fas fa-baby"></i> Kitten (2-12 bulan)</h4>
                        <p><strong>Porsi:</strong> 30-50g per hari<br>
                        <strong>Frekuensi:</strong> 3-4 kali sehari<br>
                        <strong>Protein:</strong> 30-35%</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-cat"></i> Dewasa (1-7 tahun)</h4>
                        <p><strong>Porsi:</strong> 50-70g per hari<br>
                        <strong>Frekuensi:</strong> 2 kali sehari<br>
                        <strong>Protein:</strong> 25-30%</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-user-clock"></i> Senior (7+ tahun)</h4>
                        <p><strong>Porsi:</strong> 40-60g per hari<br>
                        <strong>Frekuensi:</strong> 2-3 kali sehari<br>
                        <strong>Protein:</strong> 25-28%</p>
                    </div>
                </div>
            </div>

            <!-- PERALATAN SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-box"></i>
                    Peralatan Dasar
                </h2>
                <div class="equipment-grid">
                    <div class="equipment-item">
                        <i class="fas fa-box"></i>
                        <h4>Kotak Pasir</h4>
                        <p>Dengan pasir kucing berkualitas</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-utensils"></i>
                        <h4>Mangkuk Makan</h4>
                        <p>Wadah terpisah untuk makanan dan air</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-home"></i>
                        <h4>Tempat Tidur</h4>
                        <p>Area istirahat yang nyaman</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-gamepad"></i>
                        <h4>Mainan</h4>
                        <p>Mainan sederhana untuk aktivitas</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-brush"></i>
                        <h4>Sisir</h4>
                        <p>Untuk perawatan bulu rutin</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-first-aid"></i>
                        <h4>P3K Dasar</h4>
                        <p>Peralatan kesehatan sederhana</p>
                    </div>
                </div>

                <div class="info-box">
                    <i class="fas fa-lightbulb"></i>
                    <strong>Tips:</strong> Fokus pada kebutuhan dasar yang berkualitas baik daripada peralatan mewah.
                </div>
            </div>

            <!-- GALERI SECTION -->
            <div class="section gallery-section">
                <h2 class="section-title">
                    <i class="fas fa-images"></i>
                    Galeri Kucing Domestik
                </h2>

                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1574158622682-e40e69881006" 
                             alt="Kucing Domestik Abu-abu"
                             class="gallery-image">
                        <div class="gallery-overlay">
                            <h4>Kucing Domestik Abu-abu</h4>
                            <p>Warna abu-abu yang elegan dengan mata yang ekspresif</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1533743983669-94fa5c4338ec" 
                             alt="Kucing Domestik Putih"
                             class="gallery-image">
                        <div class="gallery-overlay">
                            <h4>Kucing Domestik Putih</h4>
                            <p>Bulu putih bersih yang menawan</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1561948955-570b270e7c36" 
                             alt="Kucing Domestik Bermain"
                             class="gallery-image">
                        <div class="gallery-overlay">
                            <h4>Kucing Domestik Bermain</h4>
                            <p>Menunjukkan sifat aktif dan lincah</p>
                        </div>
                    </div>
                </div>

                <div class="warning-box">
                    <i class="fas fa-heart"></i>
                    <strong>Catatan Penting:</strong> Kucing domestik mungkin tidak memiliki pedigree, tetapi mereka memiliki kepribadian yang unik dan kasih sayang yang tak terbatas. Dengan perawatan yang baik, mereka bisa menjadi teman setia yang memberikan kebahagiaan di rumah Anda.
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation for main image
            const mainImage = document.querySelector('.main-image');
            mainImage.classList.add('loaded');
            
            // Animation for sections
            const sections = document.querySelectorAll('.section');
            const options = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, options);

            sections.forEach(section => {
                observer.observe(section);
            });

            // Gallery overlay animations
            const galleryItems = document.querySelectorAll('.gallery-item');
            galleryItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    const overlay = item.querySelector('.gallery-overlay');
                    overlay.style.transform = 'translateY(0)';
                });
                
                item.addEventListener('mouseleave', () => {
                    const overlay = item.querySelector('.gallery-overlay');
                    overlay.style.transform = 'translateY(100%)';
                });
            });
        });
    </script>
</body>
</html>
