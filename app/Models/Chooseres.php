<?php

namespace App\Models;


class Choose
{
    private static $select_schedule =[
        [
            "image" => "img/drdian.jpeg",
            "name" => "dr. Dian Oktaria Safitri, Sp.KJ",
            "rs" => "Rumah Sakit Hermina",
            "daerah" => "Jantinegara, Jakarta Timur",
            "spesial1" => "Kecemasan",
            "spesial2" => "Pekerjaan",
            "spesial3" => "Sosial"
        ],
        [
            "image" => "img/drandreas.jpg",
            "name" => "dr. Andreas Kurniawan, Sp.KJ",
            "rs" => "Rumah Sakit Eka Bekasi",
            "daerah" => "Bekasi, Jawa Barat",
            "spesial1" => "Hyphoteraphy",
            "spesial2" => "Psikiologi",
            "spesial3" => "Sosial"
        ],
        [
            "image" => "img/drdharmawan.jpg",
            "name" => "dr. Dharmawan Ardi Purnama, Sp.KJ",
            "rs" => "Rumah Sakit Tebet",
            "daerah" => "Tebet, Jakarta Timur",
            "spesial1" => "Konsultasi",
            "spesial2" => "Pemeriksaan Kejiwaan",
            "spesial3" => "Kecemasan"
        ],
        [
            "image" => "img/drgitayanti.jpg",
            "name" => "dr. Gitayanti Hadisukanto, Sp.KJ",
            "rs" => "Rumah Sakit Pondok Indah",
            "daerah" => "Pondok Indah, Jakarta Selatan",
            "spesial1" => "Konsultasi",
            "spesial2" => "Spesialis Anak",
            "spesial3" => "Spesialis Remaja"
        ],
        [
            "image" => "img/drjiemi.jpg",
            "name" => "dr. Jiemi Ardian, Sp.KJ",
            "rs" => "Rumah Sakit Siloam Bogor",
            "daerah" => "Bogor, Jawa Barat",
            "spesial1" => "Psychotherapy",
            "spesial2" => "Hypnotherapy",
            "spesial3" => "Mindfulness"
        ],
        [
            "image" => "img/drwily.jpeg",
            "name" => "dr. Willy Steven, Sp.KJ",
            "rs" => "Rumah Sakit Hermina",
            "daerah" => "Jatinegara, Jakarta Timurr",
            "spesial1" => "Diagnosis",
            "spesial2" => "Pencegahan",
            "spesial3" => "Pengobatan"
        ]
    ];

    public static function all()
    {
        return collect(self::$select_schedule);
    }

    public static function find($button)
    {
        $counselling = static::all();
        return $counselling->firstWhere('button', $button);
    }

    
}
