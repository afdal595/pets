<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Retriever - Panduan Lengkap Ras Anjing</title>
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
            background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
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
            background: #f39c12;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 25px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background: #e67e22;
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
            color: #f39c12;
            font-size: 2rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .section-title i {
            background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
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
            border-left: 4px solid #f39c12;
        }

        .characteristic-item h4 {
            color: #f39c12;
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
            border: 2px solid #f39c12;
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
            color: #f39c12;
            margin-bottom: 15px;
        }

        .equipment-item h4 {
            color: #f39c12;
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
            <h1><i class="fas fa-dog"></i> GOLDEN RETRIEVER</h1>
            <p>Panduan Lengkap Ras Anjing Golden Retriever - Dari Biografi hingga Perawatan</p>
        </div>

        <div class="main-image-section">
            <img src="https://images.unsplash.com/photo-1552053831-71594a27632d?w=600&h=400&fit=crop&crop=center" 
                 alt="Golden Retriever" class="main-image">
        </div>

        <div class="content-grid">
            <!-- BIOGRAFI SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-book-open"></i>
                    Biografi Ras Golden Retriever
                </h2>
                
                <div class="bio-text">
                    <p>Golden Retriever adalah salah satu ras anjing paling populer dan dicintai di dunia. Dikembangkan pada pertengahan abad ke-19 di Skotlandia oleh Lord Tweedmouth, ras ini awalnya dibiakkan untuk berburu burung air di dataran tinggi Skotlandia. Kombinasi kecerdasan, keramahan, dan kemampuan retriever yang luar biasa membuat mereka menjadi anjing keluarga ideal.</p>
                    
                    <p>Golden Retriever dikenal dengan bulu emasnya yang indah, kepribadian yang ramah dan sabar, serta kecerdasan yang tinggi. Mereka sangat mudah dilatih dan memiliki sifat yang sangat sosial, membuat mereka cocok untuk keluarga dengan anak-anak, lansia, maupun sebagai anjing terapi dan pelayanan.</p>
                    
                    <p>Ras ini memiliki naluri retriever yang kuat, yang berarti mereka suka mengambil dan membawa barang di mulut mereka. Golden Retriever juga dikenal sebagai anjing yang sangat aktif dan membutuhkan olahraga rutin untuk menjaga kesehatan fisik dan mental mereka.</p>
                </div>

                <div class="characteristics-grid">
                    <div class="characteristic-item">
                        <h4><i class="fas fa-weight"></i> Berat Badan</h4>
                        <p><strong>Jantan:</strong> 29-34 kg<br>
                        <strong>Betina:</strong> 25-29 kg</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-ruler-vertical"></i> Tinggi Badan</h4>
                        <p><strong>Jantan:</strong> 56-61 cm<br>
                        <strong>Betina:</strong> 51-56 cm</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-heart"></i> Umur Harapan</h4>
                        <p>10-12 tahun dengan perawatan optimal</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-palette"></i> Warna Bulu</h4>
                        <p>Golden (emas) dalam berbagai nuansa dari terang hingga gelap</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-brain"></i> Temperamen</h4>
                        <p>Ramah, cerdas, dapat diandalkan, loyal, dan mudah dilatih</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-running"></i> Tingkat Aktivitas</h4>
                        <p>Tinggi - membutuhkan olahraga minimal 60-90 menit per hari</p>
                    </div>
                </div>

                <div class="warning-box">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong>Penting:</strong> Golden Retriever adalah anjing yang sangat aktif dan membutuhkan stimulasi mental serta fisik yang cukup. Tanpa aktivitas yang memadai, mereka bisa menjadi destruktif atau mengalami kecemasan.
                </div>
            </div>

            <!-- PERAWATAN SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-spa"></i>
                    Panduan Perawatan Golden Retriever
                </h2>

                <ul class="care-list">
                    <li>
                        <strong>Perawatan Bulu Harian</strong>
                        Sikat bulu Golden Retriever setiap hari untuk mencegah kusut dan mengurangi rontok. Gunakan sikat pin brush atau slicker brush untuk hasil terbaik.
                    </li>
                    <li>
                        <strong>Mandi Rutin</strong>
                        Mandikan setiap 6-8 minggu atau sesuai kebutuhan. Golden Retriever suka bermain air dan bisa kotor dengan cepat jika aktif di luar ruangan.
                    </li>
                    <li>
                        <strong>Olahraga Intensif</strong>
                        Berikan minimal 60-90 menit olahraga per hari. Kombinasikan jalan kaki, berlari, berenang, dan permainan fetch untuk menjaga kebugaran.
                    </li>
                    <li>
                        <strong>Stimulasi Mental</strong>
                        Berikan puzzle toys, latihan obedience, dan aktivitas yang menantang kecerdasan mereka untuk mencegah kebosanan.
                    </li>
                    <li>
                        <strong>Pemeriksaan Kesehatan</strong>
                        Lakukan pemeriksaan veteriner rutin setiap 6 bulan. Golden Retriever rentan terhadap hip dysplasia, elbow dysplasia, dan masalah mata.
                    </li>
                    <li>
                        <strong>Perawatan Telinga</strong>
                        Bersihkan telinga seminggu sekali karena bentuk telinga yang menggantung membuat mereka rentan infeksi telinga.
                    </li>
                    <li>
                        <strong>Perawatan Gigi</strong>
                        Sikat gigi 2-3 kali seminggu dan berikan dental chews untuk menjaga kesehatan mulut dan mencegah tartar.
                    </li>
                </ul>

                <div class="info-box">
                    <i class="fas fa-lightbulb"></i>
                    <strong>Tips:</strong> Golden Retriever adalah anjing yang sangat sosial dan membutuhkan interaksi dengan keluarga. Jangan meninggalkan mereka sendirian terlalu lama karena bisa mengalami separation anxiety.
                </div>
            </div>

            <!-- MAKANAN SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-utensils"></i>
                    Panduan Makanan Golden Retriever
                </h2>

                <div class="bio-text">
                    <p>Golden Retriever membutuhkan nutrisi berkualitas tinggi untuk mendukung gaya hidup aktif mereka. Penting untuk memberikan makanan seimbang yang sesuai dengan usia, berat badan, dan tingkat aktivitas mereka.</p>
                </div>

                <div class="food-grid">
                    <div class="food-item">
                        <i class="fas fa-drumstick-bite"></i>
                        <h4>Protein Berkualitas</h4>
                        <p>26-30% protein dari sumber seperti ayam, ikan salmon, atau daging sapi untuk membangun otot</p>
                    </div>
                    <div class="food-item">
                        <i class="fas fa-bread-slice"></i>
                        <h4>Karbohidrat Sehat</h4>
                        <p>Beras merah, oatmeal, dan sweet potato untuk energi berkelanjutan</p>
                    </div>
                    <div class="food-item">
                        <i class="fas fa-fish"></i>
                        <h4>Omega-3 & 6</h4>
                        <p>Minyak ikan salmon untuk kesehatan kulit, bulu yang berkilau, dan anti-inflamasi</p>
                    </div>
                    <div class="food-item">
                        <i class="fas fa-carrot"></i>
                        <h4>Vitamin & Mineral</h4>
                        <p>Glucosamine untuk sendi, antioksidan untuk sistem imun</p>
                    </div>
                </div>

                <div class="characteristics-grid">
                    <div class="characteristic-item">
                        <h4><i class="fas fa-baby"></i> Anak Anjing (2-12 bulan)</h4>
                        <p><strong>Porsi:</strong> 1.5-3 cangkir per hari<br>
                        <strong>Frekuensi:</strong> 3-4 kali sehari<br>
                        <strong>Protein:</strong> 28-30%</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-user"></i> Anjing Dewasa (1-7 tahun)</h4>
                        <p><strong>Porsi:</strong> 2-3 cangkir per hari<br>
                        <strong>Frekuensi:</strong> 2 kali sehari<br>
                        <strong>Protein:</strong> 26-28%</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-user-clock"></i> Anjing Senior (7+ tahun)</h4>
                        <p><strong>Porsi:</strong> 1.5-2.5 cangkir per hari<br>
                        <strong>Frekuensi:</strong> 2 kali sehari<br>
                        <strong>Protein:</strong> 24-26%</p>
                    </div>
                    <div class="characteristic-item">
                        <h4><i class="fas fa-ban"></i> Makanan yang Dihindari</h4>
                        <p>Cokelat, anggur, bawang, alpukat, xylitol, makanan berlemak tinggi</p>
                    </div>
                </div>

                <div class="warning-box">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong>Peringatan:</strong> Golden Retriever rentan terhadap bloat (gastric torsion). Hindari olahraga berat 1-2 jam sebelum dan sesudah makan, dan gunakan slow feeder untuk mencegah makan terlalu cepat.
                </div>
            </div>

            <!-- PERALATAN SECTION -->
            <div class="section">
                <h2 class="section-title">
                    <i class="fas fa-tools"></i>
                    Peralatan Wajib untuk Golden Retriever
                </h2>

                <div class="equipment-grid">
                    <div class="equipment-item">
                        <i class="fas fa-brush"></i>
                        <h4>Pin Brush & Slicker Brush</h4>
                        <p>Untuk perawatan bulu harian dan mengurangi rontok yang berlebihan</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-cut"></i>
                        <h4>Undercoat Rake</h4>
                        <p>Khusus untuk menghilangkan undercoat yang mati terutama saat musim rontok</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-tint"></i>
                        <h4>Shampo Khusus</h4>
                        <p>Shampo untuk bulu panjang dengan konditioner untuk menjaga kelembutan bulu</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-running"></i>
                        <h4>Harness & Leash</h4>
                        <p>Harness yang nyaman dan tali yang kuat untuk anjing berukuran besar dan aktif</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-tennis-ball"></i>
                        <h4>Fetch Toys</h4>
                        <p>Bola tenis, frisbee, dan dummy retriever untuk memenuhi naluri retriever mereka</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-puzzle-piece"></i>
                        <h4>Puzzle Toys</h4>
                        <p>Mainan interaktif untuk stimulasi mental dan mencegah kebosanan</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-swimming-pool"></i>
                        <h4>Life Jacket</h4>
                        <p>Pelampung untuk aktivitas berenang yang aman (Golden Retriever suka air)</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-bone"></i>
                        <h4>Chew Toys</h4>
                        <p>Mainan kunyah yang tahan lama untuk menjaga kesehatan gigi</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-bed"></i>
                        <h4>Kasur Besar</h4>
                        <p>Kasur orthopedic yang cukup besar untuk anjing berukuran besar</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-utensils"></i>
                        <h4>Mangkuk Anti-Slip</h4>
                        <p>Mangkuk stainless steel atau keramik dengan dasar anti-slip</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-car"></i>
                        <h4>Car Harness/Barrier</h4>
                        <p>Pengaman mobil khusus untuk anjing besar saat bepergian</p>
                    </div>
                    <div class="equipment-item">
                        <i class="fas fa-first-aid"></i>
                        <h4>Kotak P3K</h4>
                        <p>Lengkap dengan thermometer, perban, dan obat-obatan dasar</p>
                    </div>
                </div>

                <div class="info-box">
                    <i class="fas fa-lightbulb"></i>
                    <strong>Rekomendasi:</strong> Investasi dalam peralatan berkualitas tinggi akan menghemat biaya jangka panjang dan memastikan kenyamanan Golden Retriever yang aktif.
                </div>
            </div>

            <!-- GALERI SECTION -->
            <div class="section gallery-section">
                <h2 class="section-title">
                    <i class="fas fa-images"></i>
                    Galeri Golden Retriever
                </h2>

                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1552053831-71594a27632d?w=400&h=300&fit=crop" alt="Golden Retriever Dewasa">
                        <div class="gallery-overlay">
                            <h4>Golden Retriever Dewasa</h4>
                            <p>Golden Retriever dewasa dengan bulu emas yang indah</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1518717758536-85ae29035b6d?w=400&h=300&fit=crop" alt="Anak Golden Retriever">
                        <div class="gallery-overlay">
                            <h4>Anak Golden Retriever</h4>
                            <p>Anak anjing Golden Retriever yang menggemaskan</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1537151608828-ea2b11777ee8?w=400&h=300&fit=crop" alt="Golden Retriever Bermain">
                        <div class="gallery-overlay">
                            <h4>Golden Retriever Bermain</h4>
                            <p>Golden Retriever sedang bermain fetch di taman</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=400&h=300&fit=crop" alt="Golden Retriever Keluarga">
                        <div class="gallery-overlay">
                            <h4>Golden Retriever Keluarga</h4>
                            <p>Golden Retriever bersama keluarga menunjukkan sifat ramah</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1590736969955-71cc94901144?w=400&h=300&fit=crop" alt="Golden Retriever Berenang">
                        <div class="gallery-overlay">
                            <h4>Golden Retriever Berenang</h4>
                            <p>Golden Retriever menunjukkan kemampuan berenang alami mereka</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1551717743-49959800b1f6?w=400&h=300&fit=crop" alt="Golden Retriever Training">
                        <div class="gallery-overlay">
                            <h4>Golden Retriever Training</h4>
                            <p>Sesi latihan menunjukkan kecerdasan dan kepatuhan mereka</p>
                        </div>
                    </div>
                </div>

                <div class="warning-box" style="margin-top: 30px;">
                    <i class="fas fa-heart"></i>
                    <strong>Catatan Penting:</strong> Golden Retriever adalah anjing keluarga yang luar biasa dengan kebutuhan aktivitas tinggi. Mereka membutuhkan komitmen untuk olahraga harian, perawatan bulu rutin, dan interaksi sosial yang cukup. Dengan perawatan yang tepat, mereka akan menjadi kompanion setia selama bertahun-tahun.
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
