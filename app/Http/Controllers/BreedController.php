<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ras;

class BreedController extends Controller
{
    public function show($breed)
    {
        // Convert URL-friendly breed name to searchable format
        $breedName = str_replace('-', ' ', $breed);
        
        // Try to find the breed in the database first
        $breedData = Ras::with([
            'jenisHewan',
            'makanan',
            'peralatan',
            'galeriHewan'
        ])->where('nama', 'like', "%{$breedName}%")->first();
        
        // If breed exists in database, use it
        if ($breedData) {
            return view('breeds.show', ['breed' => $breedData]);
        }
        
        // If not found in database, use static breed data
        $staticBreed = $this->getStaticBreedData($breed);
        if ($staticBreed) {
            return view('breeds.static-show', ['breed' => $staticBreed]);
        }
        
        // If neither found, return 404
        abort(404, 'Breed not found');
    }
    
    private function getStaticBreedData($breed)
    {
        $breeds = [
            'bulldog' => [
                'nama' => 'Bulldog',
                'slug' => 'bulldog',
                'jenis' => 'Anjing',
                'deskripsi' => 'Bulldog adalah ras anjing yang dikenal dengan wajah rata dan tubuh yang berotot. Mereka adalah anjing yang ramah, tenang, dan sangat setia kepada keluarga.',
                'karakteristik' => 'Ramah, Tenang, Setia, Pemberani, Sabar',
                'ukuran' => 'Sedang',
                'berat' => '18-25 kg',
                'tinggi' => '31-40 cm',
                'harapan_hidup' => '8-10 tahun',
                'gambar' => '/images/breeds/bulldog.jpg',
                'galeri' => [
                    '/images/breeds/bulldog-1.jpg',
                    '/images/breeds/bulldog-2.jpg',
                    '/images/breeds/bulldog-3.jpg'
                ],
                'perawatan' => [
                    'grooming' => 'Sikat bulu setiap hari, bersihkan lipatan wajah secara teratur',
                    'olahraga' => 'Olahraga ringan, hindari aktivitas berat dalam cuaca panas',
                    'kesehatan' => 'Perhatikan masalah pernapasan, obesitas, dan masalah kulit'
                ]
            ],
            'golden-retriever' => [
                'nama' => 'Golden Retriever',
                'slug' => 'golden-retriever',
                'jenis' => 'Anjing',
                'deskripsi' => 'Golden Retriever adalah anjing yang sangat cerdas, ramah, dan mudah dilatih. Mereka dikenal sebagai anjing keluarga yang sempurna dan sangat baik dengan anak-anak.',
                'karakteristik' => 'Cerdas, Ramah, Setia, Sabar, Energik',
                'ukuran' => 'Besar',
                'berat' => '25-34 kg',
                'tinggi' => '51-61 cm',
                'harapan_hidup' => '10-12 tahun',
                'gambar' => '/images/breeds/golden-retriever.jpg',
                'galeri' => [
                    '/images/breeds/golden-retriever-1.jpg',
                    '/images/breeds/golden-retriever-2.jpg',
                    '/images/breeds/golden-retriever-3.jpg'
                ],
                'perawatan' => [
                    'grooming' => 'Sikat bulu 2-3 kali seminggu, mandi sebulan sekali',
                    'olahraga' => 'Membutuhkan olahraga aktif minimal 1-2 jam setiap hari',
                    'kesehatan' => 'Perhatikan masalah displasia pinggul, masalah mata, dan kanker'
                ]
            ],
            'shih-tzu' => [
                'nama' => 'Shih Tzu',
                'slug' => 'shih-tzu',
                'jenis' => 'Anjing',
                'deskripsi' => 'Shih Tzu adalah anjing kecil yang elegan dengan bulu panjang dan wajah yang manis. Mereka adalah anjing pendamping yang sempurna dengan sifat yang ramah dan menyenangkan.',
                'karakteristik' => 'Ramah, Playful, Affectionate, Outgoing, Alert',
                'ukuran' => 'Kecil',
                'berat' => '4-7 kg',
                'tinggi' => '20-28 cm',
                'harapan_hidup' => '10-18 tahun',
                'gambar' => '/images/breeds/shih-tzu.jpg',
                'galeri' => [
                    '/images/breeds/shih-tzu-1.jpg',
                    '/images/breeds/shih-tzu-2.jpg',
                    '/images/breeds/shih-tzu-3.jpg'
                ],
                'perawatan' => [
                    'grooming' => 'Sikat bulu setiap hari, grooming profesional setiap 6-8 minggu',
                    'olahraga' => 'Olahraga ringan, jalan-jalan pendek sudah cukup',
                    'kesehatan' => 'Perhatikan masalah mata, masalah pernapasan, dan masalah punggung'
                ]
            ],
            'siberian-husky' => [
                'nama' => 'Siberian Husky',
                'slug' => 'siberian-husky',
                'jenis' => 'Anjing',
                'deskripsi' => 'Siberian Husky adalah anjing pekerja yang kuat dan tahan lama, dikenal dengan mata biru yang menawan dan stamina yang luar biasa. Mereka adalah anjing yang independen dan energik.',
                'karakteristik' => 'Energik, Independen, Ramah, Alert, Gentle',
                'ukuran' => 'Besar',
                'berat' => '16-27 kg',
                'tinggi' => '51-60 cm',
                'harapan_hidup' => '12-14 tahun',
                'gambar' => '/images/breeds/siberian-husky.jpg',
                'galeri' => [
                    '/images/breeds/siberian-husky-1.jpg',
                    '/images/breeds/siberian-husky-2.jpg',
                    '/images/breeds/siberian-husky-3.jpg'
                ],
                'perawatan' => [
                    'grooming' => 'Sikat bulu 2-3 kali seminggu, lebih sering saat musim rontok',
                    'olahraga' => 'Membutuhkan olahraga intensif minimal 2 jam setiap hari',
                    'kesehatan' => 'Perhatikan masalah mata, displasia pinggul, dan masalah tiroid'
                ]
            ],
            'pit-bull' => [
                'nama' => 'Pit Bull',
                'slug' => 'pit-bull',
                'jenis' => 'Anjing',
                'deskripsi' => 'Pit Bull adalah anjing yang kuat dan atletis dengan sifat yang setia dan penyayang terhadap keluarga. Mereka membutuhkan sosialisasi yang baik dan pemilik yang berpengalaman.',
                'karakteristik' => 'Setia, Pemberani, Energik, Affectionate, Confident',
                'ukuran' => 'Sedang-Besar',
                'berat' => '14-36 kg',
                'tinggi' => '43-53 cm',
                'harapan_hidup' => '8-15 tahun',
                'gambar' => '/images/breeds/pit-bull.jpg',
                'galeri' => [
                    '/images/breeds/pit-bull-1.jpg',
                    '/images/breeds/pit-bull-2.jpg',
                    '/images/breeds/pit-bull-3.jpg'
                ],
                'perawatan' => [
                    'grooming' => 'Sikat bulu seminggu sekali, mandi sesuai kebutuhan',
                    'olahraga' => 'Membutuhkan olahraga aktif dan stimulasi mental setiap hari',
                    'kesehatan' => 'Perhatikan masalah jantung, displasia pinggul, dan alergi kulit'
                ]
            ],
            'maine-coon' => [
                'nama' => 'Maine Coon',
                'slug' => 'maine-coon',
                'jenis' => 'Kucing',
                'deskripsi' => 'Maine Coon adalah salah satu ras kucing terbesar di dunia dengan bulu panjang yang indah. Mereka dikenal dengan sifat yang ramah, gentle, dan sangat baik dengan anak-anak.',
                'karakteristik' => 'Ramah, Gentle, Intelligent, Playful, Independent',
                'ukuran' => 'Besar',
                'berat' => '4-8 kg',
                'tinggi' => '25-40 cm',
                'harapan_hidup' => '12-15 tahun',
                'gambar' => '/images/breeds/maine-coon.jpg',
                'galeri' => [
                    '/images/breeds/maine-coon-1.jpg',
                    '/images/breeds/maine-coon-2.jpg',
                    '/images/breeds/maine-coon-3.jpg'
                ],
                'perawatan' => [
                    'grooming' => 'Sikat bulu setiap hari untuk mencegah matting',
                    'olahraga' => 'Permainan interaktif dan climbing trees',
                    'kesehatan' => 'Perhatikan masalah jantung, displasia pinggul, dan masalah ginjal'
                ]
            ],
            'siamese' => [
                'nama' => 'Siamese',
                'slug' => 'siamese',
                'jenis' => 'Kucing',
                'deskripsi' => 'Siamese adalah kucing yang elegan dengan pola warna point yang khas. Mereka adalah kucing yang vokal, cerdas, dan sangat sosial yang senang berinteraksi dengan manusia.',
                'karakteristik' => 'Vokal, Cerdas, Sosial, Affectionate, Active',
                'ukuran' => 'Sedang',
                'berat' => '2.5-4.5 kg',
                'tinggi' => '20-25 cm',
                'harapan_hidup' => '12-20 tahun',
                'gambar' => '/images/breeds/siamese.jpg',
                'galeri' => [
                    '/images/breeds/siamese-1.jpg',
                    '/images/breeds/siamese-2.jpg',
                    '/images/breeds/siamese-3.jpg'
                ],
                'perawatan' => [
                    'grooming' => 'Sikat bulu seminggu sekali, bulu pendek mudah dirawat',
                    'olahraga' => 'Permainan aktif dan stimulasi mental',
                    'kesehatan' => 'Perhatikan masalah ginjal, masalah mata, dan masalah pernapasan'
                ]
            ],
            'scottish-fold' => [
                'nama' => 'Scottish Fold',
                'slug' => 'scottish-fold',
                'jenis' => 'Kucing',
                'deskripsi' => 'Scottish Fold adalah kucing dengan telinga yang terlipat unik yang memberikan ekspresi wajah seperti burung hantu. Mereka adalah kucing yang tenang, manis, dan mudah beradaptasi.',
                'karakteristik' => 'Tenang, Manis, Adaptable, Playful, Loyal',
                'ukuran' => 'Sedang',
                'berat' => '2.5-6 kg',
                'tinggi' => '20-25 cm',
                'harapan_hidup' => '11-14 tahun',
                'gambar' => '/images/breeds/scottish-fold.jpg',
                'galeri' => [
                    '/images/breeds/scottish-fold-1.jpg',
                    '/images/breeds/scottish-fold-2.jpg',
                    '/images/breeds/scottish-fold-3.jpg'
                ],
                'perawatan' => [
                    'grooming' => 'Sikat bulu 2-3 kali seminggu, bersihkan telinga secara teratur',
                    'olahraga' => 'Permainan ringan dan climbing activities',
                    'kesehatan' => 'Perhatikan masalah tulang rawan, masalah jantung, dan masalah ginjal'
                ]
            ],
            'anggora' => [
                'nama' => 'Anggora',
                'slug' => 'anggora',
                'jenis' => 'Kucing',
                'deskripsi' => 'Kucing Anggora adalah kucing ras tua yang berasal dari Ankara, Turki. Mereka terkenal dengan bulu putih panjangnya yang lembut dan sifat yang energik serta penuh kasih sayang.',
                'karakteristik' => 'Ramah, Energik, Cerdas, Penuh kasih sayang, Anggun',
                'ukuran' => 'Sedang',
                'berat' => '3.5-5.5 kg',
                'tinggi' => '23-25 cm',
                'harapan_hidup' => '12-18 tahun',
                'gambar' => '/images/breeds/anggora.jpg',
                'galeri' => [
                    '/images/breeds/anggora-1.jpg',
                    '/images/breeds/anggora-2.jpg',
                    '/images/breeds/anggora-3.jpg'
                ],
                'perawatan' => [
                    'grooming' => 'Penyikatan bulu setiap hari untuk mencegah kusut dan bola bulu. Mandi setiap 4-6 minggu dengan shampoo khusus kucing berbulu panjang.',
                    'olahraga' => 'Kucing Anggora sangat aktif dan membutuhkan banyak aktivitas fisik. Sediakan mainan interaktif dan waktu bermain setiap hari.',
                    'kesehatan' => 'Perlu perhatian khusus pada kesehatan ginjal dan jantung. Rutin periksa ke dokter hewan dan jaga kebersihan telinga.'
                ]
            ],
            'domestik' => [
                'nama' => 'Domestik',
                'slug' => 'domestik',
                'jenis' => 'Kucing',
                'deskripsi' => 'Kucing Domestik atau Kucing Kampung adalah kucing yang paling umum ditemui di Indonesia. Mereka sangat mudah beradaptasi, memiliki daya tahan tubuh yang kuat, dan personality yang beragam.',
                'karakteristik' => 'Mudah beradaptasi, Pintar, Setia, Mandiri, Ramah',
                'ukuran' => 'Sedang',
                'berat' => '3-6 kg',
                'tinggi' => '20-25 cm',
                'harapan_hidup' => '12-18 tahun',
                'gambar' => '/images/breeds/domestik.jpg',
                'galeri' => [
                    '/images/breeds/domestik-1.jpg',
                    '/images/breeds/domestik-2.jpg',
                    '/images/breeds/domestik-3.jpg'
                ],
                'perawatan' => [
                    'grooming' => 'Cukup mudah dirawat. Sikat bulu 1-2 kali seminggu dan mandi sesuai kebutuhan. Jaga kebersihan telinga dan kuku.',
                    'olahraga' => 'Sediakan tempat bermain dan mainan interaktif. Luangkan waktu 15-30 menit setiap hari untuk bermain bersama.',
                    'kesehatan' => 'Terapkan vaksinasi rutin dan obat cacing. Periksakan ke dokter hewan setiap 6-12 bulan sekali.'
                ]
            ]
        ];
        
        return $breeds[$breed] ?? null;
    }
}
