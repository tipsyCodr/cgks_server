<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try{
            $request->validate([
                'mobile' => 'required',
                'password' => 'required',
            ]);

            $user = User::where('mobile', $request->mobile)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json([
                    'status' => "error",
                    'message' => "Incorrect mobile or password"
                ],401);
            }

            $token = $user->createToken('api-token')->plainTextToken;
            return response()->json([
                'user' => $user,
                'token' => $token
            ],200);
        }
        catch (ValidationException $e) {
            return response()->json(['error' => 'Error: ' . $e->getMessage()], 422);
        }

    }

    public function logout(Request $request)
    {
       try{ $request->user()->currentAccessToken()->delete();
            return response()->json([
                'message' => 'Logged out successfully'
            ]);
        }
        catch (ValidationException $e) {
            return response()->json(['error'=> ''. $e->getMessage()],500);
        }
    }
}
