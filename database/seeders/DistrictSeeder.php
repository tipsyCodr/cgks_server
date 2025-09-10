<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $districts = [
        'All',
        "कवर्धा",
        "कांकेर",
        "कोरबा",
        "कोरिया",
        "जशपुर",
        "जांजगीर-चाम्पा",
        "मनेंद्रगढ-चिरमिरी-भरतपुर",
        "सक्ती",
        "सारंगढ़-बिलाईगढ़",
        "मोहला-मानपुर",
        "दन्तेवाड़ा",
        "दुर्ग",
        "धमतरी",
        "बिलासपुर",
        "बस्तर",
        "महासमुन्द",
        "राजनांदगांव",
        "रायगढ",
        "रायपुर",
        "सरगुजा",
        "बलौदाबाजार ज़िला",
        "बालोद",
        "मुंगेली",
        "बेमेतरा",
        "सूरजपुर",
        "गरियाबंद",
        "सुकमा",
        "बलरामपुर",
        "कोंडागाँव",
        "नारायणपुर",
        "बीजापुर",
        "गौरेला-पेण्ड्रा-मरवाही",
        "खैरागढ़-छुईखदान-गंडई",
    ];

    foreach ($districts as $district) {
        \DB::table('districts')->insert([
            'name' => $district,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    }
}
