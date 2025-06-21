<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shih Tzu - Panduan Lengkap Ras Anjing</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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
            background: #7d3c98;
            transform: translateY(-2px);
        }

        .main-image-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .main-image {
            width: 100%;
            max-width: 600px;
            height: 400px;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .content-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .section {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }

        .section:hover {
            transform: translateY(-5px);
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
            background: linear-gradient(135deg, #8e44ad 0%, #9b59b6 100%);
            color: white;
            padding: 15px;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bio-text {
            font-size: 1.1rem;
            line-height: 1.8;
            text-align: justify;
            margin-bottom: 20px;
        }

        .characteristics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .characteristic-item {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #8e44ad;
        }

        .characteristic-item h4 {
            color: #8e44ad;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .care-list {
            list-style: none;
            margin-top: 20px;
        }

        .care-list li {
            background: #f8f9fa;
            margin-bottom: 15px;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #28a745;
            position: relative;
        }

        .care-list li:before {
            content: '\f058';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            color: #28a745;
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 1.2rem;
        }

        .care-list li strong {
            color: #28a745;
            display: block;
            margin-bottom: 5px;
        }

        .food-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
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
            color: #856404;
            margin-bottom: 10px;
        }

        .equipment-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .equipment-item {
            background: #e7f3ff;
            border: 2px solid #8e44ad;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .equipment-item:hover {
            transform: scale(1.05);
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
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            color: white;
            padding: 20px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
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
            background: #d1ecf1;
            border: 2px solid #17a2b8;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .info-box i {
            color: #0c5460;
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
        <a href="/" class="back-btn">
            <i class="fas fa-arrow-left"></i> Kembali ke Beranda
        </a>

        <div class="header">
            <h1><i class="fas fa-dog"></i> SHIH TZU</h1>
            <p>Panduan Lengkap Ras Anjing Shih Tzu - Dari Biografi hingga Perawatan</p>
        </div>

        <div class="main-image-section">
            <img src="https://images.unsplash.com/photo-1551717743-49959800b1f6?w=600&h=400&fit=crop&crop=center" 
                 alt="Shih Tzu" class="main-image">
        </div>

        <div class="content-grid">
            <!-- BIOGRAFI SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-book-open"></i>
                    Biografi Ras Shih Tzu
                </h2>
                
                <div class="bio-text">
                    <p>Shih Tzu, yang secara harfiah berarti "anjing singa" dalam bahasa Mandarin, adalah salah satu ras anjing yang paling elegan dan menawan di dunia. Dengan bulu panjang yang mengalir seperti sutra dan wajah yang ekspresif, Shih Tzu telah memikat hati manusia selama berabad-abad.</p>
                    
                    <p>Ras ini berasal dari Tibet dan kemudian dikembangkan di istana kekaisaran Cina, di mana mereka diperlakukan sebagai anjing kerajaan yang berharga. Shih Tzu dihasilkan dari persilangan antara Lhasa Apso dari Tibet dengan Pekingese dari Cina, menciptakan anjing kecil yang memiliki temperamen yang sempurna sebagai anjing pendamping.</p>
                    
                    <p>Shih Tzu memiliki kepribadian yang ramah, ceria, dan sangat penyayang. Mereka dikenal sebagai anjing yang sangat mudah bergaul dan cocok untuk semua anggota keluarga, termasuk anak-anak dan lansia. Meskipun berukuran kecil, mereka memiliki kepribadian yang besar dan penuh percaya diri.</p>
                </div>

                <div class="characteristics-grid">
                    <div class="characteristic-item">
                        <h4><i class="fas fa-ruler"></i> Ukuran</h4>
                        <p><strong>Tinggi:</strong> 20-28 cm<br>
                        <strong>Berat:</strong> 4-7 kg</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-heart"></i> Temperamen</h4>
                        <p>Ramah, playful, affectionate, outgoing, dan sangat loyal</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-clock"></i> Usia Hidup</h4>
                        <p>10-18 tahun (dengan perawatan yang baik)</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-home"></i> Cocok Untuk</h4>
                        <p>Keluarga dengan anak, apartemen, pemula, lansia</p>
                    </div>
                </div>

                <div class="warning-box">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong>Penting:</strong> Shih Tzu memiliki bulu yang membutuhkan perawatan intensif dan mata yang sensitif. Mereka juga dapat mengalami masalah pernapasan karena moncong pendek.
                </div>
            </div>

            <!-- PERAWATAN SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-spa"></i>
                    Panduan Perawatan Shih Tzu
                </h2>

                <ul class="care-list">
                    <li>
                        <strong>Perawatan Bulu Harian</strong>
                        Sikat bulu Shih Tzu setiap hari untuk mencegah kusut dan menjaga kesehatan kulit. Gunakan sikat pin brush dan slicker brush untuk hasil terbaik.
                    </li>
                    <li>
                        <strong>Perawatan Mata</strong>
                        Bersihkan area mata setiap hari dengan kain lembab untuk mencegah noda air mata dan infeksi. Gunakan produk pembersih mata khusus anjing.
                    </li>
                    <li>
                        <strong>Grooming Profesional</strong>
                        Bawa ke groomer profesional setiap 6-8 minggu untuk trimming dan perawatan menyeluruh. Pertimbangkan gaya "puppy cut" untuk perawatan yang lebih mudah.
                    </li>
                    <li>
                        <strong>Perawatan Gigi</strong>
                        Sikat gigi 2-3 kali seminggu menggunakan pasta gigi khusus anjing. Berikan dental chews untuk membantu menjaga kebersihan mulut.
                    </li>
                    <li>
                        <strong>Olahraga Ringan</strong>
                        Meski tidak membutuhkan olahraga berat, Shih Tzu tetap perlu jalan-jalan pendek dan bermain untuk menjaga kesehatan mental dan fisik.
                    </li>
                    <li>
                        <strong>Kontrol Suhu</strong>
                        Jaga agar Shih Tzu tetap sejuk di cuaca panas karena mereka rentan terhadap heat stroke. Sediakan tempat yang teduh dan air minum yang cukup.
                    </li>
                </ul>

                <div class="info-box">
                    <i class="fas fa-lightbulb"></i>
                    <strong>Tips:</strong> Shih Tzu sangat responsif terhadap positive reinforcement training. Mulai sosialisasi dan pelatihan sejak dini untuk hasil terbaik.
                </div>
            </div>

            <!-- MAKANAN SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-utensils"></i>
                    Panduan Makanan Shih Tzu
                </h2>

                <div class="bio-text">
                    <p>Shih Tzu membutuhkan makanan berkualitas tinggi yang sesuai dengan ukuran kecil mereka. Karena mereka rentan terhadap obesitas, penting untuk mengontrol porsi makan dan memberikan makanan yang bergizi seimbang.</p>
                </div>

                <div class="food-grid">
                    <div class="food-item">
                        <i class="fas fa-drumstick-bite"></i>
                        <h4>Protein Berkualitas Tinggi</h4>
                        <p>Pilih makanan dengan protein utama dari daging ayam, ikan, atau daging sapi. Hindari by-products dan filler.</p>
                    </div>
                    <div class="food-item">
                        <i class="fas fa-seedling"></i>
                        <h4>Kibble Kecil</h4>
                        <p>Gunakan kibble berukuran kecil yang sesuai dengan mulut mungil Shih Tzu untuk memudahkan pengunyahan.</p>
                    </div>
                    <div class="food-item">
                        <i class="fas fa-fish"></i>
                        <h4>Omega-3 & Omega-6</h4>
                        <p>Penting untuk kesehatan bulu dan kulit yang mengkilap. Dapat diperoleh dari minyak ikan atau salmon.</p>
                    </div>
                    <div class="food-item">
                        <i class="fas fa-apple-alt"></i>
                        <h4>Sayuran & Buah</h4>
                        <p>Wortel, labu, blueberry sebagai snack sehat. Hindari anggur, bawang, dan cokelat yang beracun.</p>
                    </div>
                </div>

                <div class="warning-box">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong>Peringatan:</strong> Shih Tzu mudah mengalami obesitas. Bagi makanan menjadi 2-3 porsi kecil sehari dan batasi treats maksimal 10% dari total kalori harian.
                </div>
            </div>

            <!-- PERALATAN SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-tools"></i>
                    Peralatan Wajib untuk Shih Tzu
                </h2>

                <div class="equipment-grid">
                    <div class="equipment-item">
                        <i class="fas fa-brush"></i>
                        <h4>Pin Brush & Slicker Brush</h4>
                        <p>Dua jenis sikat wajib untuk perawatan bulu harian dan mencegah matting</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-cut"></i>
                        <h4>Gunting Grooming</h4>
                        <p>Untuk trimming bulu di sekitar mata, telinga, dan kaki agar tetap rapi dan sehat</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-eye"></i>
                        <h4>Pembersih Mata</h4>
                        <p>Produk khusus untuk membersihkan noda air mata dan menjaga kebersihan mata</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-utensils"></i>
                        <h4>Mangkuk Stainless Steel</h4>
                        <p>Mangkuk yang mudah dibersihkan dan tidak menyebabkan alergi atau noda pada moncong</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-bed"></i>
                        <h4>Tempat Tidur Empuk</h4>
                        <p>Kasur yang nyaman dan hangat, karena Shih Tzu suka tidur dengan nyaman</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-tooth"></i>
                        <h4>Sikat Gigi Anjing</h4>
                        <p>Sikat gigi khusus dan pasta gigi anjing untuk kebersihan mulut yang optimal</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-tshirt"></i>
                        <h4>Pakaian Hangat</h4>
                        <p>Sweater atau jaket untuk musim dingin, karena Shih Tzu sensitif terhadap cuaca dingin</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-gamepad"></i>
                        <h4>Mainan Interaktif</h4>
                        <p>Puzzle toys dan mainan kecil untuk stimulasi mental dan menghibur</p>
                    </div>
                </div>

                <div class="info-box">
                    <i class="fas fa-lightbulb"></i>
                    <strong>Tips Belanja:</strong> Investasikan pada peralatan grooming berkualitas tinggi karena Shih Tzu membutuhkan perawatan rutin. Peralatan yang baik akan bertahan lama dan memberikan hasil terbaik.
                </div>
            </div>

            <!-- GALERI SECTION -->
            <div class="section gallery-section">
                <h2 class="section-title">
                    <i class="fas fa-images"></i>
                    Galeri Shih Tzu
                </h2>

                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1551717743-49959800b1f6?w=400&h=300&fit=crop" alt="Shih Tzu Dewasa">
                        <div class="gallery-overlay">
                            <h4>Shih Tzu Dewasa</h4>
                            <p>Shih Tzu dewasa dengan bulu panjang yang terawat dengan baik</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=400&h=300&fit=crop" alt="Anak Shih Tzu">
                        <div class="gallery-overlay">
                            <h4>Anak Shih Tzu</h4>
                            <p>Anak anjing Shih Tzu yang menggemaskan dengan mata besar</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1552053831-71594a27632d?w=400&h=300&fit=crop" alt="Shih Tzu Bermain">
                        <div class="gallery-overlay">
                            <h4>Shih Tzu Bermain</h4>
                            <p>Shih Tzu sedang bermain di taman dengan ekspresi gembira</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1537151608828-ea2b11777ee8?w=400&h=300&fit=crop" alt="Shih Tzu Keluarga">
                        <div class="gallery-overlay">
                            <h4>Shih Tzu Keluarga</h4>
                            <p>Shih Tzu bersama keluarga menunjukkan sifat ramah dan penyayang</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=400&h=300&fit=crop" alt="Perawatan Shih Tzu">
                        <div class="gallery-overlay">
                            <h4>Perawatan Shih Tzu</h4>
                            <p>Contoh perawatan rutin Shih Tzu termasuk grooming bulu</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1518717758536-85ae29035b6d?w=400&h=300&fit=crop" alt="Shih Tzu Istirahat">
                        <div class="gallery-overlay">
                            <h4>Shih Tzu Istirahat</h4>
                            <p>Shih Tzu dalam posisi istirahat yang nyaman dan santai</p>
                        </div>
                    </div>
                </div>

                <div class="warning-box" style="margin-top: 30px;">
                    <i class="fas fa-heart"></i>
                    <strong>Catatan Penting:</strong> Setiap Shih Tzu memiliki kepribadian unik. Meskipun panduan ini memberikan informasi umum, selalu konsultasikan dengan dokter hewan untuk kebutuhan spesifik anjing Anda. Shih Tzu adalah anjing yang membutuhkan komitmen tinggi untuk perawatan grooming harian.
                </div>
            </div>
        </div>
    </div>

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
                    this.style.opacity = '1';
                });
            });
        });
    </script>
</body>
</html>
