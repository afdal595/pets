<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Guild - Informasi Hewan Peliharaan</title>
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
    <header>
        <div class="admin-login">
            <a href="{{ route('admin.login') }}" class="admin-btn">Login Admin</a>
        </div>
        <h1 class="title">PET GUILD</h1>
        <p class="subtitle">Temukan Informasi Tentang Hewanmu</p>
    </header>

    <main>
        <!-- Pet Type Section -->
        <section id="petTypeSection">
            <h2 class="section-title">Pilih Jenis Hewan</h2>
            <div class="pet-types">
                <div class="pet-type dog" onclick="showBreeds('dog')">
                    <img src="https://img.icons8.com/bubbles/100/dog.png" alt="Dog" class="pet-icon">
                    <h3 class="pet-name">Anjing</h3>
                </div>
                <div class="pet-type cat" onclick="showBreeds('cat')">
                    <img src="https://img.icons8.com/bubbles/100/cat.png" alt="Cat" class="pet-icon">
                    <h3 class="pet-name">Kucing</h3>
                </div>
            </div>
        </section>

        <!-- Petshop Section -->
        <section id="petshopSection">
            <h2 class="section-title">Rekomendasi Petshop Makassar</h2>
            <div class="petshop">
                <div class="petshop-card">
                    <img src="{{ asset('images/hello_pet.jpeg') }}" alt="Petshop 1" class="petshop-img">
                    <div class="petshop-info">
                        <h3 class="petshop-name">Hello petshop</h3>
                        <p class="petshop-address">Jl. Pasar ikan No.17,Bulo Gading, kec.Ujung pandang</p>
                        <p class="petshop-rating">★★★★☆ (4.2/5)</p>
                        <a href="#" class="petshop-maps">📍 Lihat di Peta</a>
                    </div>
                </div>
                <div class="petshop-card">
                    <img src="{{ asset('images/toko2.jpeg') }}" alt="Petshop 2" class="petshop-img">
                    <div class="petshop-info">
                        <h3 class="petshop-name">BeePetMart Panaikang</h3>
                        <p class="petshop-address">Jl Urip Sumoharjo, Panaikang, Kec Ujung pandang</p>
                        <p class="petshop-rating">★★★★★ (4.8/5)</p>
                        <a href="#" class="petshop-maps">📍 Lihat di Peta</a>
                    </div>
                </div>
                <div class="petshop-card">
                    <img src="{{ asset('images/toko3.jpeg') }}" alt="Petshop 3" class="petshop-img">
                    <div class="petshop-info">
                        <h3 class="petshop-name">Amigos PetShop Makasssar</h3>
                        <p class="petshop-address">Jl. Landak Lama No.89, Mamajang dalam, Kec. Mamajang, Kota Makassar</p>
                        <p class="petshop-rating">★★★★☆ (4.5/5)</p>
                        <a href="#" class="petshop-maps">📍 Lihat di Peta</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Dog Breeds Section -->
        <section id="dogBreeds" class="breeds-section">
            <h2 class="breed-title">Ras Anjing</h2>
            <div class="breeds">
                <div class="breed-card">
                    <img src="https://images.unsplash.com/photo-1600804340584-c7db2eacf0bf?w=400&h=320&fit=crop&crop=center" alt="Shih Tzu" class="breed-image">
                    <div class="breed-info">
                        <h3 class="breed-name">Shih Tzu</h3>
                        <p class="breed-description">Anjing kecil yang elegan dengan bulu panjang yang indah</p>
                        <a href="{{ route('breed.show', ['breed' => 'shih-tzu']) }}" class="detail-btn">Lihat Detail</a>
                    </div>
                </div>
                <div class="breed-card">
                    <img src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?w=400&h=320&fit=crop&crop=center" alt="Bulldog" class="breed-image">
                    <div class="breed-info">
                        <h3 class="breed-name">Bulldog</h3>
                        <p class="breed-description">Anjing yang kuat dan setia dengan wajah yang khas</p>
                        <a href="{{ route('breed.show', ['breed' => 'bulldog']) }}" class="detail-btn">Lihat Detail</a>
                    </div>
                </div>
                <div class="breed-card">
                    <img src="https://images.unsplash.com/photo-1552053831-71594a27632d?w=400&h=320&fit=crop&crop=center" alt="Golden Retriever" class="breed-image">
                    <div class="breed-info">
                        <h3 class="breed-name">Golden Retriever</h3>
                        <p class="breed-description">Anjing yang ramah dan cerdas, sempurna untuk keluarga</p>
                        <a href="{{ route('breed.show', ['breed' => 'golden-retriever']) }}" class="detail-btn">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cat Breeds Section -->
        <section id="catBreeds" class="breeds-section">
            <h2 class="breed-title">Ras Kucing</h2>
            <div class="breeds">
                <div class="breed-card">
                    <img src="https://images.unsplash.com/photo-1568152950566-c1bf43f4ab28?w=400&h=320&fit=crop&crop=center" alt="Anggora" class="breed-image">
                    <div class="breed-info">
                        <h3 class="breed-name">Anggora</h3>
                        <p class="breed-description">Kucing yang anggun dengan bulu putih yang panjang dan lembut</p>
                        <a href="{{ route('breed.show', ['breed' => 'anggora']) }}" class="detail-btn">Lihat Detail</a>
                    </div>
                </div>

                <div class="breed-card">
                    <img src="https://images.unsplash.com/photo-1541781774459-bb2af2f05b55?w=400&h=320&fit=crop&crop=center" alt="Persian" class="breed-image">
                    <div class="breed-info">
                        <h3 class="breed-name">Persian</h3>
                        <p class="breed-description">Kucing cantik dengan bulu lebat dan wajah yang khas</p>
                        <a href="{{ route('breed.show', ['breed' => 'persian']) }}" class="detail-btn">Lihat Detail</a>
                    </div>
                </div>

                <div class="breed-card">
                    <img src="https://images.unsplash.com/photo-1574144611937-0df059b5ef3e?w=400&h=320&fit=crop&crop=center" alt="Domestik" class="breed-image">
                    <div class="breed-info">
                        <h3 class="breed-name">Domestik</h3>
                        <p class="breed-description">Kucing rumahan yang pintar dan mudah beradaptasi</p>
                        <a href="{{ route('breed.show', ['breed' => 'domestik']) }}" class="detail-btn">Lihat Detail</a>
                    </div>  
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Pet Guild. All rights reserved.</p>
        <p>Informasi yang disediakan di situs ini hanya untuk tujuan edukasi.</p>
    </footer>

    <script>
        // Fungsi untuk menampilkan ras hewan berdasarkan jenis (dog/cat)
        function showBreeds(petType) {
            // Sembunyikan semua sections
            document.querySelectorAll('.breeds-section').forEach(section => {
                section.style.display = 'none';
            });
            
            // Tampilkan section yang dipilih
            const targetSection = document.getElementById(petType + 'Breeds');
            if (targetSection) {
                targetSection.style.display = 'block';
            }
        }

        // Inisialisasi tampilan awal
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.breeds-section').forEach(section => {
                section.style.display = 'none';
            });
        });
    </script>

    <style>
        /* Reset dan style dasar */
        * {
            margin: 0;
            padding: 0; 
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: white;
            padding: 2rem 0;
            text-align: center;
            position: relative;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .subtitle {
            font-size: 1.25rem;
            opacity: 0.9;
        }

        .admin-login {
            position: absolute;
            top: 1rem;
            right: 1rem;
        }

        .admin-btn {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .admin-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        /* Section Styles */
        section {
            padding: 3rem 1rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
            color: #2d3748;
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 1rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(to right, #6366f1, #8b5cf6);
        }

        /* Pet Types Section */
        .pet-types {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 2rem;
        }

        .pet-type {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .pet-type:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .pet-icon {
            width: 100px;
            height: 100px;
            margin-bottom: 1rem;
        }

        .pet-name {
            color: #4a5568;
            font-size: 1.25rem;
        }

        /* Petshop Cards */
        .petshop {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 1rem;
        }

        .petshop-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .petshop-card:hover {
            transform: translateY(-5px);
        }

        .petshop-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .petshop-info {
            padding: 1.5rem;
        }

        .petshop-name {
            font-size: 1.25rem;
            color: #2d3748;
            margin-bottom: 0.5rem;
        }

        .petshop-address {
            color: #718096;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }

        .petshop-rating {
            color: #f6ad55;
            margin-bottom: 1rem;
        }

        .petshop-maps {
            display: inline-block;
            color: #6366f1;
            text-decoration: none;
            font-weight: 500;
        }

        /* Breed Cards */
        .breeds {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 1rem;
        }

        .breed-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
            padding: 1.5rem;
        }

        .breed-name {
            font-size: 1.25rem;
            color: #2d3748;
            margin-bottom: 0.5rem;
        }

        .breed-description {
            color: #718096;
            margin-bottom: 1rem;
        }

        .detail-btn {
            display: inline-block;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .detail-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(99, 102, 241, 0.2);
        }

        /* Footer */
        footer {
            background: #2d3748;
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 3rem;
        }

        footer p {
            opacity: 0.8;
            margin: 0.5rem 0;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            overflow-y: auto;
        }

        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            border-radius: 10px;
            width: 90%;
            max-width: 1200px;
            position: relative;
        }

        .modal-close {
            position: absolute;
            right: 20px;
            top: 15px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .modal-close:hover {
            color: #666;
        }

        .modal-body {
            margin-top: 20px;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }
    </style>

    <script>
        // ...existing code...

        // Function to show breed detail in modal
        function showBreedDetail(breed) {
            // Get the modal
            const modal = document.getElementById('breedModal');
            const modalContent = document.getElementById('modalContent');

            // Get the current tab content for the breed
            const breedDetailContainer = document.getElementById(breed + '-detail');
            if (breedDetailContainer) {
                // Clone the content
                const contentClone = breedDetailContainer.cloneNode(true);
                contentClone.classList.remove('hidden');
                
                // Clear previous content and add new content
                modalContent.innerHTML = '';
                modalContent.appendChild(contentClone);
                
                // Show the modal
                modal.style.display = 'block';
                
                // Activate the first tab (biography)
                const bioTab = modalContent.querySelector('#' + breed + '-biografi');
                if (bioTab) {
                    document.querySelectorAll('.tab-content').forEach(content => {
                        content.classList.remove('active');
                    });
                    bioTab.classList.add('active');
                }
            }
        }

        // Get the modal
        const modal = document.getElementById('breedModal');
        const closeBtn = document.querySelector('.modal-close');

        // When the user clicks on <span> (x), close the modal
        closeBtn.onclick = function() {
            modal.style.display = 'none';
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }

        // Function to show tab within modal
        window.showTab = function(tabName) {
            const modalContent = document.getElementById('modalContent');
            const breedDetailContainer = modalContent.firstElementChild;
            if (breedDetailContainer) {
                const breed = breedDetailContainer.id.replace('-detail', '');
                const newTab = modalContent.querySelector('#' + breed + '-' + tabName);
                if (newTab) {
                    modalContent.querySelectorAll('.tab-content').forEach(content => {
                        content.classList.remove('active');
                    });
                    newTab.classList.add('active');
                }
            }
        }
    </script>
</body>
</html>