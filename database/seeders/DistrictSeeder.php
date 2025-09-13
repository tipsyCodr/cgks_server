<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
	public function run(): void
	{
		$districts = [
	["name" => "रायपुर", "rto_no" => "04"],
	["name" => "धमतरी", "rto_no" => "05"],
	["name" => "महासमुन्द", "rto_no" => "06"],
	["name" => "दुर्ग", "rto_no" => "07"],
	["name" => "राजनांदगांव", "rto_no" => "08"],
	["name" => "कवर्धा", "rto_no" => "09"],
	["name" => "बिलासपुर", "rto_no" => "10"],
	["name" => "जांजगीर-चाम्पा", "rto_no" => "11"],
	["name" => "कोरबा", "rto_no" => "12"],
	["name" => "रायगढ़", "rto_no" => "13"],
	["name" => "जशपुर", "rto_no" => "14"],
	["name" => "सरगुजा", "rto_no" => "15"],
	["name" => "कोरिया", "rto_no" => "16"],
	["name" => "जगदलपुर", "rto_no" => "17"],
	["name" => "दंतेवाड़ा", "rto_no" => "18"],
	["name" => "कांकेर", "rto_no" => "19"],
	["name" => "बीजापुर", "rto_no" => "20"],
	["name" => "नारायणपुर", "rto_no" => "21"],
	["name" => "बलौदाबाजार", "rto_no" => "22"],
	["name" => "गरियाबंद", "rto_no" => "23"],
	["name" => "बालोद", "rto_no" => "24"],
	["name" => "बेमेतरा", "rto_no" => "25"],
	["name" => "सुकमा", "rto_no" => "26"],
	["name" => "कोंडागाँव", "rto_no" => "27"],
	["name" => "मुंगेली", "rto_no" => "28"],
	["name" => "सूरजपुर", "rto_no" => "29"],
	["name" => "बलरामपुर", "rto_no" => "30"],
];


	foreach ($districts as $district) {
		\DB::table('districts')->insert([
			'name' => $district['name'],
			'rto_no' => $district['rto_no'],
			'created_at' => now(),
			'updated_at' => now(),
		]);
	}
	}
}
