<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persian Cat - Panduan Lengkap Ras Kucing</title>
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
            background: #9b59b6;
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
            border-left: 4px solid #e74c3c;
            position: relative;
        }

        .care-list li:before {
            content: '\f058';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            color: #e74c3c;
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 1.2rem;
        }

        .care-list li strong {
            color: #e74c3c;
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
            <h1><i class="fas fa-cat"></i> PERSIAN CAT</h1>
            <p>Panduan Lengkap Ras Kucing Persian - Dari Biografi hingga Perawatan</p>
        </div>

        <div class="main-image-section">
            <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?w=600&h=400&fit=crop&crop=center" 
                 alt="Persian Cat" class="main-image">
        </div>

        <div class="content-grid">
            <!-- BIOGRAFI SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-book-open"></i>
                    Biografi Ras Persian Cat
                </h2>
                
                <div class="bio-text">
                    <p>Kucing Persian adalah salah satu ras kucing tertua dan paling populer di dunia. Berasal dari Persia (sekarang Iran) pada abad ke-17, kucing ini dibawa ke Eropa oleh pedagang dan diplomat. Persian dikenal dengan bulu panjangnya yang mewah, wajah datar yang khas, dan temperamen yang tenang dan lembut.</p>
                    
                    <p>Kucing Persian memiliki ciri khas berupa hidung yang pesek, mata bulat yang besar, dan bulu yang sangat panjang dan lebat. Mereka adalah kucing yang sangat cocok untuk hidup di dalam rumah dan dikenal sebagai kucing pangkuan yang sempurna karena sifatnya yang tenang dan tidak terlalu aktif.</p>
                    
                    <p>Ras ini telah mengalami perkembangan selektif selama berabad-abad, menghasilkan berbagai variasi warna dan pola. Persian modern memiliki struktur tubuh yang kompak dengan kaki pendek dan dada yang lebar, memberikan penampilan yang elegan dan mewah.</p>
                </div>

                <div class="characteristics-grid">
                    <div class="characteristic-item">
                        <h4><i class="fas fa-weight"></i> Berat Badan</h4>
                        <p><strong>Jantan:</strong> 4-7 kg<br>
                        <strong>Betina:</strong> 3-5 kg</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-ruler-vertical"></i> Tinggi Badan</h4>
                        <p><strong>Standar:</strong> 25-35 cm dengan tubuh kompak dan rendah</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-heart"></i> Umur Harapan</h4>
                        <p>12-17 tahun dengan perawatan optimal</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-palette"></i> Warna Bulu</h4>
                        <p>Lebih dari 80 variasi warna: solid, bicolor, tabby, pointed, dan lainnya</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-brain"></i> Temperamen</h4>
                        <p>Tenang, lembut, penyayang, pendiam, dan suka ketenangan</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-home"></i> Tingkat Aktivitas</h4>
                        <p>Rendah hingga sedang - lebih suka aktivitas dalam ruangan</p>
                    </div>
                </div>

                <div class="warning-box">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong>Penting:</strong> Kucing Persian memiliki struktur wajah datar yang membuat mereka rentan terhadap masalah pernapasan. Mereka juga membutuhkan perawatan bulu intensif setiap hari.
                </div>
            </div>

            <!-- PERAWATAN SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-spa"></i>
                    Panduan Perawatan Persian Cat
                </h2>

                <ul class="care-list">
                    <li>
                        <strong>Penyisiran Bulu Harian</strong>
                        Sisir bulu Persian setiap hari dengan sisir logam bergigi halus untuk mencegah kusut dan matting. Bulu yang kusut dapat menyebabkan iritasi kulit.
                    </li>
                    <li>
                        <strong>Pembersihan Mata Rutin</strong>
                        Bersihkan area mata setiap hari dengan kapas lembab untuk menghilangkan tear staining yang umum terjadi pada Persian.
                    </li>
                    <li>
                        <strong>Mandi Bulanan</strong>
                        Mandikan setiap 4-6 minggu dengan shampo khusus kucing berbulu panjang untuk menjaga kebersihan dan kelembutan bulu.
                    </li>
                    <li>
                        <strong>Pembersihan Telinga</strong>
                        Periksa dan bersihkan telinga seminggu sekali untuk mencegah penumpukan kotoran dan infeksi.
                    </li>
                    <li>
                        <strong>Pemotongan Kuku</strong>
                        Potong kuku setiap 2-3 minggu dan sediakan scratching post untuk menjaga kesehatan kuku.
                    </li>
                    <li>
                        <strong>Kontrol Kesehatan Pernapasan</strong>
                        Monitor pernapasan dan hindari stress atau aktivitas berlebihan yang dapat memperburuk masalah pernapasan.
                    </li>
                    <li>
                        <strong>Kebersihan Litter Box</strong>
                        Jaga kebersihan litter box setiap hari dan gunakan litter yang tidak menempel pada bulu panjang.
                    </li>
                </ul>

                <div class="info-box">
                    <i class="fas fa-lightbulb"></i>
                    <strong>Tips:</strong> Persian adalah kucing yang sensitif terhadap perubahan lingkungan. Berikan rutinitas yang konsisten dan lingkungan yang tenang untuk kesejahteraan optimal.
                </div>
            </div>

            <!-- MAKANAN SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-utensils"></i>
                    Panduan Makanan Persian Cat
                </h2>

                <div class="bio-text">
                    <p>Kucing Persian membutuhkan nutrisi berkualitas tinggi yang disesuaikan dengan kebutuhan khusus mereka. Karena tingkat aktivitas yang rendah, penting untuk mengontrol porsi makanan untuk mencegah obesitas.</p>
                </div>

                <div class="food-grid">
                    <div class="food-item">
                        <i class="fas fa-fish"></i>
                        <h4>Protein Berkualitas</h4>
                        <p>32-40% protein dari ikan, ayam, atau daging untuk menjaga massa otot dan kesehatan bulu</p>
                    </div>
                    <div class="food-item">
                        <i class="fas fa-oil-can"></i>
                        <h4>Omega-3 & 6</h4>
                        <p>Asam lemak esensial untuk bulu berkilau dan kesehatan kulit yang optimal</p>
                    </div>
                    <div class="food-item">
                        <i class="fas fa-seedling"></i>
                        <h4>Serat & Prebiotik</h4>
                        <p>Untuk pencernaan sehat dan mengurangi hairball yang umum pada kucing berbulu panjang</p>
                    </div>
                    <div class="food-item">
                        <i class="fas fa-tint"></i>
                        <h4>Hidrasi Cukup</h4>
                        <p>Makanan basah dan air bersih untuk mencegah masalah ginjal dan saluran kemih</p>
                    </div>
                </div>

                <div class="characteristics-grid">
                    <div class="characteristic-item">
                        <h4><i class="fas fa-baby"></i> Kitten (2-12 bulan)</h4>
                        <p><strong>Porsi:</strong> 60-80g per hari<br>
                        <strong>Frekuensi:</strong> 3-4 kali sehari<br>
                        <strong>Protein:</strong> 35-40%</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-cat"></i> Kucing Dewasa (1-7 tahun)</h4>
                        <p><strong>Porsi:</strong> 40-60g per hari<br>
                        <strong>Frekuensi:</strong> 2 kali sehari<br>
                        <strong>Protein:</strong> 32-36%</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-user-clock"></i> Kucing Senior (7+ tahun)</h4>
                        <p><strong>Porsi:</strong> 35-50g per hari<br>
                        <strong>Frekuensi:</strong> 2 kali sehari<br>
                        <strong>Protein:</strong> 30-34%</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-ban"></i> Makanan yang Dihindari</h4>
                        <p>Cokelat, bawang, anggur, kafein, makanan anjing, susu sapi</p>
                    </div>
                </div>

                <div class="warning-box">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong>Peringatan:</strong> Persian rentan obesitas karena aktivitas rendah. Monitor berat badan secara rutin dan sesuaikan porsi makanan dengan kebutuhan kalori harian.
                </div>
            </div>

            <!-- PERALATAN SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-tools"></i>
                    Peralatan Wajib untuk Persian Cat
                </h2>

                <div class="equipment-grid">
                    <div class="equipment-item">
                        <i class="fas fa-brush"></i>
                        <h4>Sisir Logam & Slicker Brush</h4>
                        <p>Sisir bergigi halus dan kasar untuk perawatan bulu harian yang menyeluruh</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-cut"></i>
                        <h4>Dematting Comb</h4>
                        <p>Untuk mengatasi bulu yang kusut dan matted tanpa melukai kulit</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-eye"></i>
                        <h4>Eye Cleaning Solution</h4>
                        <p>Pembersih mata khusus untuk mengatasi tear staining pada Persian</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-shower"></i>
                        <h4>Shampo Kucing Premium</h4>
                        <p>Shampo khusus bulu panjang dengan conditioner untuk kelembutan optimal</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-wind"></i>
                        <h4>Hair Dryer Khusus</h4>
                        <p>Pengering bulu dengan suhu rendah untuk mengeringkan bulu tebal Persian</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-box"></i>
                        <h4>Litter Box Tertutup</h4>
                        <p>Kotak pasir tertutup untuk privasi dan mencegah bulu terkontaminasi</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-utensils"></i>
                        <h4>Mangkuk Keramik Dangkal</h4>
                        <p>Mangkuk dangkal untuk mencegah bulu wajah kotor saat makan</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-bed"></i>
                        <h4>Kasur Empuk & Hangat</h4>
                        <p>Tempat tidur yang nyaman di tempat yang tenang dan hangat</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-tree"></i>
                        <h4>Cat Tree Pendek</h4>
                        <p>Pohon kucing dengan ketinggian sedang sesuai dengan aktivitas Persian</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-toy-horse"></i>
                        <h4>Mainan Interaktif Lembut</h4>
                        <p>Mainan yang merangsang mental tanpa terlalu energik</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-thermometer"></i>
                        <h4>Humidifier</h4>
                        <p>Pelembab udara untuk menjaga kesehatan pernapasan Persian</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-first-aid"></i>
                        <h4>Pet First Aid Kit</h4>
                        <p>Kotak P3K dengan termometer dan obat-obatan dasar kucing</p>
                    </div>
                </div>

                <div class="info-box">
                    <i class="fas fa-lightbulb"></i>
                    <strong>Rekomendasi:</strong> Investasi dalam peralatan grooming berkualitas tinggi sangat penting untuk Persian karena kebutuhan perawatan bulu yang intensif.
                </div>
            </div>

            <!-- GALERI SECTION -->
            <div class="section gallery-section">
                <h2 class="section-title">
                    <i class="fas fa-images"></i>
                    Galeri Persian Cat
                </h2>

                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?w=400&h=300&fit=crop" alt="Persian Cat Putih">
                        <div class="gallery-overlay">
                            <h4>Persian Cat Putih</h4>
                            <p>Persian dewasa dengan bulu putih bersih yang mewah</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1592194996308-7b43878e84a6?w=400&h=300&fit=crop" alt="Persian Kitten">
                        <div class="gallery-overlay">
                            <h4>Persian Kitten</h4>
                            <p>Anak kucing Persian yang menggemaskan dengan mata besar</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1548247416-ec66f4900b2e?w=400&h=300&fit=crop" alt="Persian Orange">
                        <div class="gallery-overlay">
                            <h4>Persian Orange</h4>
                            <p>Persian dengan warna bulu orange yang cantik</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1513245543132-31f507417b26?w=400&h=300&fit=crop" alt="Persian Grooming">
                        <div class="gallery-overlay">
                            <h4>Persian Grooming</h4>
                            <p>Sesi grooming menunjukkan perawatan bulu yang diperlukan</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1515002246390-7bf7e8f87b54?w=400&h=300&fit=crop" alt="Persian Relaxing">
                        <div class="gallery-overlay">
                            <h4>Persian Relaxing</h4>
                            <p>Persian menunjukkan sifat tenang dan suka bersantai</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1574158622682-e40e69881006?w=400&h=300&fit=crop" alt="Persian Eyes">
                        <div class="gallery-overlay">
                            <h4>Persian Eyes</h4>
                            <p>Close-up mata Persian yang indah dan ekspresif</p>
                        </div>
                    </div>
                </div>

                <div class="warning-box" style="margin-top: 30px;">
                    <i class="fas fa-heart"></i>
                    <strong>Catatan Penting:</strong> Persian adalah kucing yang membutuhkan komitmen tinggi untuk perawatan harian. Mereka ideal untuk pemilik yang menyukai rutinitas grooming dan menginginkan kucing yang tenang serta penyayang. Dengan perawatan yang tepat, Persian akan menjadi teman setia yang memberikan ketenangan dan kecantikan di rumah Anda.
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
