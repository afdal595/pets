<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulldog - Panduan Lengkap Ras Anjing</title>
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            background: #007bff;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 25px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background: #0056b3;
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
            color: #007bff;
            font-size: 2rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .section-title i {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            border-left: 4px solid #007bff;
        }

        .characteristic-item h4 {
            color: #007bff;
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
            border: 2px solid #007bff;
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
            color: #007bff;
            margin-bottom: 15px;
        }

        .equipment-item h4 {
            color: #007bff;
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
            <h1><i class="fas fa-dog"></i> BULLDOG</h1>
            <p>Panduan Lengkap Ras Anjing Bulldog - Dari Biografi hingga Perawatan</p>
        </div>

        <div class="main-image-section">
            <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=600&h=400&fit=crop&crop=center" 
                 alt="Bulldog" class="main-image">
        </div>

        <div class="content-grid">
            <!-- BIOGRAFI SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-book-open"></i>
                    Biografi Ras Bulldog
                </h2>
                
                <div class="bio-text">
                    <p>Bulldog, juga dikenal sebagai English Bulldog, adalah salah satu ras anjing yang paling mudah dikenali di dunia. Dengan wajah yang berkerut, tubuh yang kekar, dan kepribadian yang tenang, Bulldog telah menjadi simbol keberanian dan ketekunan selama berabad-abad.</p>
                    
                    <p>Ras ini awalnya dikembangkan di Inggris pada abad ke-13 untuk olahraga "bull-baiting" yang kontroversial. Setelah olahraga tersebut dilarang pada tahun 1835, peternak mulai mengembangkan Bulldog menjadi anjing pendamping yang lebih jinak dan ramah. Transformasi ini menghasilkan Bulldog modern yang kita kenal hari ini - anjing yang gentle, penyayang, dan sangat loyal kepada keluarganya.</p>
                    
                    <p>Bulldog memiliki struktur tubuh yang unik dengan kepala besar, moncong pendek (brachycephalic), dan tubuh yang kompak namun berotot. Meskipun penampilannya mungkin terlihat galak, Bulldog sebenarnya memiliki temperamen yang sangat tenang dan sabar, membuatnya menjadi anjing keluarga yang ideal.</p>
                </div>

                <div class="characteristics-grid">
                    <div class="characteristic-item">
                        <h4><i class="fas fa-ruler"></i> Ukuran</h4>
                        <p><strong>Tinggi:</strong> 31-40 cm<br>
                        <strong>Berat:</strong> 18-25 kg</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-heart"></i> Temperamen</h4>
                        <p>Tenang, ramah, sabar, loyal, dan sangat penyayang dengan anak-anak</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-clock"></i> Usia Hidup</h4>
                        <p>8-10 tahun (dengan perawatan yang baik)</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-home"></i> Cocok Untuk</h4>
                        <p>Keluarga dengan anak, apartemen, pemilik pertama kali</p>
                    </div>
                </div>

                <div class="warning-box">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong>Penting:</strong> Bulldog adalah ras brachycephalic yang rentan terhadap masalah pernapasan. Mereka tidak tahan panas dan membutuhkan lingkungan yang sejuk.
                </div>
            </div>

            <!-- PERAWATAN SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-spa"></i>
                    Panduan Perawatan Bulldog
                </h2>

                <ul class="care-list">
                    <li>
                        <strong>Perawatan Lipatan Wajah</strong>
                        Bersihkan lipatan wajah setiap hari dengan kain lembab untuk mencegah infeksi bakteri dan jamur. Keringkan dengan lembut setelah dibersihkan.
                    </li>
                    <li>
                        <strong>Kontrol Temperatur</strong>
                        Jaga Bulldog tetap sejuk, terutama saat cuaca panas. Gunakan AC atau kipas, dan hindari aktivitas berat saat siang hari.
                    </li>
                    <li>
                        <strong>Olahraga Ringan</strong>
                        Berikan olahraga ringan seperti jalan kaki pendek (15-20 menit) 2 kali sehari. Hindari olahraga berlebihan karena kesulitan bernapas.
                    </li>
                    <li>
                        <strong>Perawatan Kuku</strong>
                        Potong kuku setiap 2-3 minggu untuk mencegah kuku tumbuh terlalu panjang dan menyebabkan ketidaknyamanan.
                    </li>
                    <li>
                        <strong>Pembersihan Telinga</strong>
                        Bersihkan telinga mingguan dengan cotton swab dan pembersih telinga khusus anjing untuk mencegah infeksi.
                    </li>
                    <li>
                        <strong>Menyikat Bulu</strong>
                        Sikat bulu 2-3 kali seminggu dengan sikat lembut untuk mengurangi rontok dan menjaga kebersihan kulit.
                    </li>
                    <li>
                        <strong>Mandi Rutin</strong>
                        Mandikan setiap 6-8 minggu atau sesuai kebutuhan menggunakan shampo khusus anjing dengan pH seimbang.
                    </li>
                    <li>
                        <strong>Perawatan Gigi</strong>
                        Sikat gigi 2-3 kali seminggu dengan pasta gigi khusus anjing untuk mencegah tartar dan bau mulut.
                    </li>
                </ul>

                <div class="info-box">
                    <i class="fas fa-info-circle"></i>
                    <strong>Tips:</strong> Bulldog sangat sensitif terhadap stres dan perubahan cuaca. Selalu perhatikan tanda-tanda overheating seperti napas tersengal-sengal berlebihan, lidah biru, atau kelemahan.
                </div>
            </div>

            <!-- MAKANAN SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-utensils"></i>
                    Panduan Makanan Bulldog
                </h2>

                <div class="bio-text">
                    <p>Bulldog memiliki kebutuhan nutrisi khusus karena struktur tubuh dan tingkat aktivitas yang relatif rendah. Penting untuk menjaga berat badan ideal karena kelebihan berat badan dapat memperburuk masalah pernapasan.</p>
                </div>

                <div class="food-grid">
                    <div class="food-item">
                        <i class="fas fa-drumstick-bite"></i>
                        <h4>Protein Berkualitas Tinggi</h4>
                        <p>Ayam tanpa tulang, ikan salmon, daging sapi tanpa lemak. Minimal 20-25% protein untuk anjing dewasa.</p>
                    </div>
                    <div class="food-item">
                        <i class="fas fa-seedling"></i>
                        <h4>Karbohidrat Sehat</h4>
                        <p>Beras merah, ubi jalar, oatmeal. Hindari gandum jika anjing memiliki alergi.</p>
                    </div>
                    <div class="food-item">
                        <i class="fas fa-tint"></i>
                        <h4>Lemak Sehat</h4>
                        <p>Omega-3 dari minyak ikan, minyak kelapa dalam jumlah terbatas untuk kesehatan kulit dan bulu.</p>
                    </div>
                    <div class="food-item">
                        <i class="fas fa-carrot"></i>
                        <h4>Sayuran & Buah</h4>
                        <p>Wortel, brokoli, apel (tanpa biji), blueberry sebagai snack sehat dan sumber vitamin.</p>
                    </div>
                </div>

                <div class="characteristics-grid">
                    <div class="characteristic-item">
                        <h4><i class="fas fa-baby"></i> Anak Anjing (2-12 bulan)</h4>
                        <p><strong>Porsi:</strong> 1-1.5 cangkir per hari<br>
                        <strong>Frekuensi:</strong> 3-4 kali sehari<br>
                        <strong>Protein:</strong> 28-30%</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-dog"></i> Anjing Dewasa (1-7 tahun)</h4>
                        <p><strong>Porsi:</strong> 1.5-2 cangkir per hari<br>
                        <strong>Frekuensi:</strong> 2 kali sehari<br>
                        <strong>Protein:</strong> 20-25%</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-user-clock"></i> Anjing Senior (7+ tahun)</h4>
                        <p><strong>Porsi:</strong> 1-1.5 cangkir per hari<br>
                        <strong>Frekuensi:</strong> 2 kali sehari<br>
                        <strong>Protein:</strong> 18-22%</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-ban"></i> Makanan yang Dihindari</h4>
                        <p>Cokelat, anggur, bawang, alpukat, makanan berlemak tinggi, makanan pedas</p>
                    </div>
                </div>

                <div class="warning-box">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong>Peringatan:</strong> Bulldog mudah tersedak karena moncong pendek. Gunakan mangkuk makanan khusus dengan dasar yang datar dan berikan makanan dalam potongan kecil.
                </div>
            </div>

            <!-- PERALATAN SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-tools"></i>
                    Peralatan Wajib untuk Bulldog
                </h2>

                <div class="equipment-grid">
                    <div class="equipment-item">
                        <i class="fas fa-wind"></i>
                        <h4>Kipas Angin / AC</h4>
                        <p>Wajib untuk menjaga suhu sejuk karena Bulldog sangat rentan terhadap heat stroke</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-utensils"></i>
                        <h4>Mangkuk Khusus</h4>
                        <p>Mangkuk dengan dasar datar dan sisi rendah untuk memudahkan makan dan minum</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-vest"></i>
                        <h4>Harness Khusus</h4>
                        <p>Harness yang tidak menekan leher untuk menghindari masalah pernapasan</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-bed"></i>
                        <h4>Kasur Ortopedi</h4>
                        <p>Kasur yang mendukung sendi dan tulang belakang karena berat badan Bulldog</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-brush"></i>
                        <h4>Sikat Bulu Halus</h4>
                        <p>Sikat dengan bulu lembut untuk perawatan rutin tanpa melukai kulit sensitif</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-cut"></i>
                        <h4>Gunting Kuku</h4>
                        <p>Gunting kuku khusus anjing untuk menjaga kuku tetap pendek dan sehat</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-spray-can"></i>
                        <h4>Pembersih Lipatan</h4>
                        <p>Pembersih khusus untuk lipatan wajah dengan formula anti-bakteri dan anti-jamur</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-thermometer-half"></i>
                        <h4>Termometer</h4>
                        <p>Untuk memantau suhu tubuh, terutama saat cuaca panas</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-tshirt"></i>
                        <h4>Baju Musim Dingin</h4>
                        <p>Pakaian hangat untuk melindungi dari udara dingin karena bulu tipis</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-tooth"></i>
                        <h4>Sikat Gigi Anjing</h4>
                        <p>Sikat gigi khusus dan pasta gigi anjing untuk kebersihan mulut</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-first-aid"></i>
                        <h4>Kotak P3K</h4>
                        <p>Lengkap dengan perban, antiseptik, dan obat-obatan dasar untuk pertolongan pertama</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-car"></i>
                        <h4>Car Seat/Carrier</h4>
                        <p>Carrier yang aman dan berventilasi baik untuk perjalanan</p>
                    </div>
                </div>

                <div class="info-box">
                    <i class="fas fa-lightbulb"></i>
                    <strong>Rekomendasi:</strong> Investasi dalam peralatan berkualitas tinggi akan menghemat biaya jangka panjang dan memastikan kesehatan optimal Bulldog Anda.
                </div>
            </div>

            <!-- GALERI SECTION -->
            <div class="section gallery-section">
                <h2 class="section-title">
                    <i class="fas fa-images"></i>
                    Galeri Bulldog
                </h2>

                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=400&h=300&fit=crop" alt="Bulldog Dewasa">
                        <div class="gallery-overlay">
                            <h4>Bulldog Dewasa</h4>
                            <p>Bulldog dewasa dengan postur tubuh khas dan ekspresi tenang</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1518717758536-85ae29035b6d?w=400&h=300&fit=crop" alt="Anak Bulldog">
                        <div class="gallery-overlay">
                            <h4>Anak Bulldog</h4>
                            <p>Anak anjing Bulldog yang menggemaskan dengan mata besar</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1552053831-71594a27632d?w=400&h=300&fit=crop" alt="Bulldog Bermain">
                        <div class="gallery-overlay">
                            <h4>Bulldog Bermain</h4>
                            <p>Bulldog sedang bermain di taman dengan ekspresi gembira</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1537151608828-ea2b11777ee8?w=400&h=300&fit=crop" alt="Bulldog Keluarga">
                        <div class="gallery-overlay">
                            <h4>Bulldog Keluarga</h4>
                            <p>Bulldog bersama keluarga menunjukkan sifat ramah dan penyayang</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=400&h=300&fit=crop" alt="Perawatan Bulldog">
                        <div class="gallery-overlay">
                            <h4>Perawatan Bulldog</h4>
                            <p>Contoh perawatan rutin Bulldog termasuk pembersihan lipatan</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1518717758536-85ae29035b6d?w=400&h=300&fit=crop" alt="Bulldog Istirahat">
                        <div class="gallery-overlay">
                            <h4>Bulldog Istirahat</h4>
                            <p>Bulldog dalam posisi istirahat yang nyaman dan santai</p>
                        </div>
                    </div>
                </div>

                <div class="warning-box" style="margin-top: 30px;">
                    <i class="fas fa-heart"></i>
                    <strong>Catatan Penting:</strong> Setiap Bulldog memiliki kepribadian unik. Meskipun panduan ini memberikan informasi umum, selalu konsultasikan dengan dokter hewan untuk kebutuhan spesifik anjing Anda. Bulldog adalah investasi jangka panjang yang membutuhkan komitmen tinggi untuk perawatan kesehatan.
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
