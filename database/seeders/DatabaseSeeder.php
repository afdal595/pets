<?php

namespace Database\Seeders;

use App\Models\MstJenisHewan;
use App\Models\Ras;
use App\Models\TrHewan;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seeder User Admin
        User::create([
            'nama' => 'Admin',
            'email' => 'admin@petsguild.com',
            'password' => bcrypt('admin123'), // Password: admin123
            'role' => 'admin',
        ]);

        // Jenis Hewan
        $anjing = MstJenisHewan::create([
            'nama' => 'Anjing',
            'deskripsi' => 'Hewan peliharaan setia'
        ]);

        $kucing = MstJenisHewan::create([
            'nama' => 'Kucing',
            'deskripsi' => 'Hewan rumahan independen'
        ]);

        // Ras Anjing
        $bulldog = Ras::create([
            'jenis_hewan_id' => $anjing->id,
            'nama' => 'Bulldog',
            'deskripsi' => 'Anjing dengan wajah khas dan struktur tubuh yang kuat',
            'karakteristik' => 'Tenang, penyayang, dan setia',
            'grooming_info' => 'Butuh perawatan lipatan kulit rutin, sikat bulu 2-3 kali seminggu',
            'exercise_info' => 'Jalan-jalan ringan 15-20 menit, 2 kali sehari',
            'health_info' => 'Perhatikan kesehatan pernapasan dan suhu tubuh'
        ]);

        $pomeranian = Ras::create([
            'jenis_hewan_id' => $anjing->id,
            'nama' => 'Pomeranian',
            'deskripsi' => 'Anjing mungil dengan bulu tebal mengembang',
            'karakteristik' => 'Lincah, cerdas, penuh energi',
            'grooming_info' => 'Sikat bulu setiap hari, grooming profesional setiap 6-8 minggu',
            'exercise_info' => 'Aktivitas ringan 20-30 menit per hari',
            'health_info' => 'Perhatikan kesehatan gigi dan lutut'
        ]);

        $goldenRetriever = MstRas::create([
            'jenis_hewan_id' => $anjing->id,
            'nama' => 'Golden Retriever',
            'deskripsi' => 'Anjing keluarga yang ramah dengan bulu keemasan',
            'karakteristik' => 'Ramah, cerdas, setia, mudah dilatih',
            'grooming_info' => 'Sikat bulu 2-3 kali seminggu, grooming rutin setiap 6-8 minggu',
            'exercise_info' => 'Butuh aktivitas fisik 1-2 jam per hari',
            'health_info' => 'Perhatikan kesehatan sendi dan mata'
        ]);

        $siberianHusky = MstRas::create([
            'jenis_hewan_id' => $anjing->id,
            'nama' => 'Siberian Husky',
            'deskripsi' => 'Anjing keturunan serigala dengan mata biru yang menawan',
            'karakteristik' => 'Energetik, mandiri, ramah dengan orang',
            'grooming_info' => 'Sikat bulu 3-4 kali seminggu, lebih sering saat musim rontok',
            'exercise_info' => 'Butuh aktivitas fisik intensif minimal 2 jam per hari',
            'health_info' => 'Perhatikan kesehatan mata dan hip dysplasia'
        ]);

        $shihTzu = MstRas::create([
            'jenis_hewan_id' => $anjing->id,
            'nama' => 'Shih Tzu',
            'deskripsi' => 'Anjing mungil dengan bulu panjang yang anggun',
            'karakteristik' => 'Penyayang, ramah, cocok untuk keluarga',
            'grooming_info' => 'Sikat bulu setiap hari, grooming profesional setiap 4-6 minggu',
            'exercise_info' => 'Jalan-jalan ringan 20-30 menit per hari',
            'health_info' => 'Perhatikan kesehatan mata dan pernapasan'
        ]);

        $pitBull = MstRas::create([
            'jenis_hewan_id' => $anjing->id,
            'nama' => 'Pit Bull',
            'deskripsi' => 'Anjing atletis dengan otot yang kuat',
            'karakteristik' => 'Setia, kuat, butuh sosialisasi baik',
            'grooming_info' => 'Sikat bulu sekali seminggu, mandi setiap 4-6 minggu',
            'exercise_info' => 'Butuh aktivitas fisik intensif 1-2 jam per hari',
            'health_info' => 'Perhatikan kesehatan kulit dan sendi'
        ]);

        $golden = MstRas::create([
            'jenis_hewan_id' => $anjing->id,
            'nama' => 'Golden Retriever',
            'deskripsi' => 'Anjing berbulu emas',
            'karakteristik' => 'Ramah, cerdas, mudah dilatih'
        ]);

        // Ras Kucing
        $siamese = MstRas::create([
            'jenis_hewan_id' => $kucing->id,
            'nama' => 'Siamese',
            'deskripsi' => 'Kucing dengan corak khas',
            'karakteristik' => 'Aktif, cerdas, dan vokal'
        ]);
        $persian = MstRas::create([
            'jenis_hewan_id' => $kucing->id,
            'nama' => 'Persian',
            'deskripsi' => 'Kucing berbulu panjang',
            'karakteristik' => 'Tenang, manja, suka dimanja'
        ]);

        // Hewan Contoh
        TrHewan::create([
            'ras_id' => $bulldog->id,
            'nama' => 'Bobby',
            'biografi' => 'Bulldog yang sangat ramah',
            'umur_min_perawatan' => 1,
            'umur_max_perawatan' => 10
        ]);
        TrHewan::create([
            'ras_id' => $golden->id,
            'nama' => 'Goldie',
            'biografi' => 'Golden Retriever aktif',
            'umur_min_perawatan' => 1,
            'umur_max_perawatan' => 12
        ]);
        TrHewan::create([
            'ras_id' => $siamese->id,
            'nama' => 'Mimi',
            'biografi' => 'Siamese yang suka bermain',
            'umur_min_perawatan' => 1,
            'umur_max_perawatan' => 15
        ]);
        TrHewan::create([
            'ras_id' => $persian->id,
            'nama' => 'Snowy',
            'biografi' => 'Persian berbulu putih',
            'umur_min_perawatan' => 1,
            'umur_max_perawatan' => 14
        ]);
    }
}