<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Referral;
use App\Services\NotificationService;
use Illuminate\Http\Request;

class ReferralController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        try {
            // Find the record that belongs to the authenticated user
            $referral = Referral::where('id', $id)
                ->where('from', $request->user()->id)
                ->first();

            if (!$referral) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Referral not found'
                ], 404);
            }

            return response()->json([
                'status' => 'success',
                'data' => $referral
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch referral',
                'error' => $e->getMessage()
            ], 500);
        }
    }


}
