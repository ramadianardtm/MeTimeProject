<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Choose;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Choose::create([
            'image' => 'img/drdharmawan.jpg',
            'name' => 'dr. Dharmawan Ardi Purnama, Sp.KJ',
            'slug' => 'dr. Dharmawan',
            'rs' => 'Rumah Sakit Tebet',
            'daerah' => 'Tebet, Jakarta Timur',
            'spesial1' => 'Konsultasi',
            'spesial2' => 'Pemeriksaan Kejiwaan',
            'spesial3' => 'Kecemasan'
        ]);

        Choose::create([
            'image' => 'img/drandreas.jpg',
            'name' => 'dr. Andreas Kurniawan, Sp.KJ',
            'slug' => 'dr. Andreas',
            'rs' => 'Rumah Sakit Eka Bekasi',
            'daerah' => 'Bekasi, Jawa Barat',
            'spesial1' => 'Hyphoteraphy',
            'spesial2' => 'Psikiologi',
            'spesial3' => 'Sosial'
        ]);

        Choose::create([
            'image' => 'img/drgitayanti.jpg',
            'name' => 'dr. Gitayanti Hadisukanto, Sp.KJ',
            'slug' => 'dr. Gitayanti ',
            'rs' => 'Rumah Sakit Pondok Indah',
            'daerah' => 'Pondok Indah, Jakarta Selatan',
            'spesial1' => 'Konsultasi',
            'spesial2' => 'Spesialis Anak',
            'spesial3' => 'Spesialis Remaja'
        ]);

        Choose::create([
            'image' => 'img/drdian.jpeg',
           'name' => 'dr. Dian Oktaria Safitri, Sp.KJ',
          'slug' => 'dr. Dian ',
            'rs' => 'Rumah Sakit Hermina',
            'daerah' => 'Jantinegara, Jakarta Timur',
            'spesial1' => 'Kecemasan',
            'spesial2' => 'Pekerjaan',
            'spesial3' => 'Sosial'
        ]);

        Choose::create([
            'image' => 'img/drjiemi.jpg',
            'name' => 'dr. Jiemi Ardian, Sp.KJ',
            'slug' => 'dr. Jiemi',
            'rs' => 'Rumah Sakit Siloam Bogo',
            'daerah' => 'Bogor, Jawa Barat',
            'spesial1' => 'Psychotherapy',
            'spesial2' => 'Hypnotherapy',
            'spesial3' => 'Mindfulness'
        ]);

        Choose::create([
            'image' => 'img/drwily.jpeg',
            'name' => 'dr. Willy Steven, Sp.KJ',
            'slug' => 'dr. Willy',
            'rs' => 'Rumah Sakit Hermina',
            'daerah' => 'Jatinegara, Jakarta Timur',
            'spesial1' => 'Konsultasi',
            'spesial2' => 'Pencegahan',
            'spesial3' => 'Pengobatan'
        ]);

        Choose::create([
            'image' => 'img/natalia.jpg',
            'name' => 'dr. Natalia Widiasih Raharjanti, Sp.KJ',
            'slug' => 'dr. Natalia',
            'rs' => 'RSUPN Dr. Cipto Mangunkusumo',
            'daerah' => 'Senen, Jakarta Pusat',
            'spesial1' => 'Mental Health',
            'spesial2' => 'Psychiatry',
            'spesial3' => 'Psychology'
        ]);

    }
}
