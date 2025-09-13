<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
	public function getAllDistricts()
	{
		$districts = District::all();
		return response()->json([
			'status' => 'success',
			'data' => $districts
		]);
	}
	public function getDistrict(Request $request)
	{
		$name = $request->name;
		$district = District::where('name',$name)->get();
		return response()->json([
			'status' => 'success',
			'data' => $district
		]);
    }
}
