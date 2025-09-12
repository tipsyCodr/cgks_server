<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
	/**
		* Run the database seeds.
		*/
	public function run(): void
	{
		$positions = [
		'प्रदेश',
		'जिला',
		'खड़',
		'गुड़ी',
		'पार',
		'बूथ',
	];
	$designations = [
		'संयोजक',
		'अध्यक्ष',
		'महामंत्री',
		'संगठन मंत्री',
		'उपाध्यक्ष',
		'मंत्री',
		'सचिव',
		'सहसचिव',
		'मिडिया प्रभारी',
		'IT प्रभारी',
		'सदस्यता प्रभारी',
		'कार्यकारिणी सदस्य',
	];

	foreach ($positions as $position) {
		\DB::table('positions')->insert([
			'name' => $position,
			'created_at' => now(),
			'updated_at' => now(),
		]);
	}
	foreach ($designations as $designation) {
		\DB::table('designations')->insert([
			'name' => $designation,
			'created_at' => now(),
			'updated_at' => now(),
		]);
	}
	}
}
