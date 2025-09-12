<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Referral;
use App\Models\ThankYou; // TYFCB model
use App\Models\OneToOne; // One-to-one model
use App\Models\Visitor;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return 'Hello';
        $users = User::where('active', 1)->where('role', 'user')->get();
        return response()->json(['users' => $users], 200);
    }

    // require position & user_id
    public function  getAllUsers(Request $request)
    {
        $user = $request->user();
        $users = User::where('role', 'user')->where('id', '!=', $user->id)->get();
        return response()->json(['users' => $users], 200);
    }

    // require position & user_id
    public function  usersByPosition(Request $request)
    {
        $user = $request->user();
        $position = $request->position;
        $users = User::where('position', $position)->where('role', 'user')->where('id', '!=', $user->id)->get();
        return response()->json(['users' => $users], 200);
    }


    public function usersByDesignation(Request $request)
    {
        $user = $request->user();
        $designation = $request->designation;
        $users = User::where('designation', $designation)->where('role', 'user')->where('id', '!=', $user->id)->get();
        return response()->json(['users' => $users], 200);
    }

    public function AllUsers(Request $request)
    {
        $user = $request->user();
        $users = User::where('role', 'user')->where('id', '!=', $user->id)->get();
        return response()->json(['users' => $users], 200);
    }


    public function profile()
    {
        $user = auth()->user();
        return response()->json([
            'status' => 'success',
            'user' => $user
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'mobile' => 'nullable|string|max:15|unique:users',
            'district' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:500',
            'email' => 'nullable|email|unique:users',
            'occupation' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'email_verified_at' => 'nullable|date',
            'profile_photo' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:8',
        ]);

        if ($validate->fails()) {
            return response()->json(['error' => $validate->errors()], 422);
        }

        $user->update($request->all());

        return response()->json(['message' => 'Profile updated successfully', 'user' => $user], 200);
    }
    public function updateProfilePic(Request $request)
    {
        $user = auth()->user();

        $validate = Validator::make($request->all(), [
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($validate->fails()) {
            return response()->json(['error' => $validate->errors()], 422);
        }

        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('profile_photos', 'public');
            $user->profile_photo = $path;
            $user->save();
        }

        return response()->json(['message' => 'Profile picture updated successfully', 'user' => $user], 200);
    }

    public function getProfile(Request $request)
    {
        try {
            // $request = json_decode($request);
            $id = $request->id;

            $user = User::findOrFail($id);
            // $user = User::Where('id',$id);

            return response()->json([
                'status' => 'success',
                'user' => $user,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ]);
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function register(Request $request)
    {
        //Store the user
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            // 'district' => 'nullable|string|max:255',
            // 'city' => 'nullable|string|max:255',
            'mobile' => 'required|string|max:15|unique:users|regex:/^[0-9]{10,15}$/',
            'password' => 'required|string|min:4',
        ]);
        // return response()->json(['input' => json_encode($request->all())], 201);

        if ($validate->fails()) {
            return response()->json(['error' => $validate->errors()], 422);
        }


        $user = User::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'district' => $request->district,
            'city' => $request->city,
            'position' => $request->position ?? null,
            'designation' => $request->designation ?? null,
            'password' => Hash::make($request->password),
        ]);

         $token = $user->createToken('api-token')->plainTextToken;
            return response()->json([
                'user' => $user,
                'token' => $token
            ],200);

        // return response()->json(['message' => 'User created successfully', 'user' => $user], 200);
    }


    public function getUserFromReferralCode(Request $request)
    {
        try {
            $user = User::where('referral_code', $request->input('referral_code'))->first();
            if (!$user) {
                return response()->json(['message' => 'No user found with the provided referral code.'], 404);
            }
            return response()->json(['message' => 'User found successfully.', 'user' => $user], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error: Failed to fetch user details - ' . $e->getMessage()], 404);
        }
    }

    /**
     * Fetch authenticated user's details
     */
    public function home(Request $request)
    {
        try {
            $user = $request->user();

            if (!$user) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'User not found'
                ], 404);
            }

            // Calculate time periods
            $now = Carbon::now();
            $startOfWeek = $now->startOfWeek();
            $sixMonthsAgo = $now->copy()->subMonths(6);
            $twelveMonthsAgo = $now->copy()->subMonths(12);

            // Referrals stats
            $referralsThisWeek = Referral::where('from', $user->id)
                ->where('created_at', '>=', $startOfWeek)
                ->count();

            $referralsReceivedSixMonth = Referral::where('to', $user->id)
                ->where('created_at', '>=', $sixMonthsAgo)
                ->count();

            $referralsSixMonths = Referral::where('from', $user->id)
                ->where('created_at', '>=', $sixMonthsAgo)
                ->count();

            $referralsReceivedTwelveMonth = Referral::where('to', $user->id)
                ->where('created_at', '>=', $twelveMonthsAgo)
                ->count();

            $referralsTwelveMonths = Referral::where('from', $user->id)
                ->where('created_at', '>=', $twelveMonthsAgo)
                ->count();

            $referralsLifetime = Referral::where('from', $user->id)->count();

            $referralsReceivedLifetime = Referral::where('to', $user->id)->count();

            // TYFCB stats
            $tyfcbThisWeek = ThankYou::where('from', $user->id)
                ->where('created_at', '>=', $startOfWeek)
                ->count();

            $tyfcbSixMonths = ThankYou::where('from', $user->id)
                ->where('created_at', '>=', $sixMonthsAgo)
                ->sum('amount'); // Assuming 'amount' is the column to total

            $tyfcbTwelveMonths = ThankYou::where('from', $user->id)
                ->where('created_at', '>=', $twelveMonthsAgo)
                ->sum('amount'); // Assuming 'amount' is the column to total

            $tyfcbLifetime = ThankYou::where('from', $user->id)->sum('amount'); // Assuming 'amount' is the column to total

            //Revenue Recieved Data
            $revenueSixMonths = ThankYou::where('to', $user->id)
                ->where('created_at', '>=', $sixMonthsAgo)
                ->sum('amount'); // Assuming 'amount' is the column to total

            $revenueTwelveMonths = ThankYou::where('to', $user->id)
                ->where('created_at', '>=', $twelveMonthsAgo)
                ->sum('amount'); // Assuming 'amount' is the column to total

            $revenueLifetime = ThankYou::where('to', $user->id)->sum('amount'); // Assuming 'amount' is the column to total

            // One-to-One stats
            $otoThisWeek = OneToOne::where('user_id', $user->id)
                ->where('created_at', '>=', $startOfWeek)
                ->count();

            $otoSixMonths = OneToOne::where('user_id', $user->id)
                ->where('created_at', '>=', $sixMonthsAgo)
                ->count();

            $otoTwelveMonths = OneToOne::where('user_id', $user->id)
                ->where('created_at', '>=', $twelveMonthsAgo)
                ->count();

            $otoLifetime = OneToOne::where('user_id', $user->id)->count();

            $visitorsThisWeek = Visitor::where('created_at', '>=', $startOfWeek)
                ->count();

            $visitorsSixMonths = Visitor::where('created_at', '>=', $sixMonthsAgo)
                ->count();

            $visitorsTwelveMonths = Visitor::where('created_at', '>=', $twelveMonthsAgo)
                ->count();

            $visitorsLifetime = Visitor::count();

            // Return user details
            return response()->json([
                'status' => 'success',
                'data' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'mobile' => $user->mobile,
                    'occupation' => $user->occupation,
                    'department' => $user->department,
                    'category' => $user->category,
                    'designation' => $user->designation,
                    'company' => $user->company,
                    'address' => $user->address,
                    'profile_photo' => $user->profile_photo,
                    'bio' => $user->bio,
                    'due_date' => $user->due_date,
                    'created_at' => $user->created_at,
                    'updated_at' => $user->updated_at,
                    'stats' => [
                        'referrals' => [
                            'this_week' => $referralsThisWeek,
                            'six_months' => $referralsSixMonths,
                            'twelve_months' => $referralsTwelveMonths,
                            'lifetime' => $referralsLifetime
                        ],
                        'referrals_received' => [
                            'six_months' => $referralsReceivedSixMonth,
                            'twelve_months' => $referralsReceivedTwelveMonth,
                            'lifetime' => $referralsReceivedLifetime
                        ],
                        'tyfcb' => [
                            'this_week' => $tyfcbThisWeek,
                            'six_months' => $tyfcbSixMonths,
                            'twelve_months' => $tyfcbTwelveMonths,
                            'lifetime' => $tyfcbLifetime
                        ],
                        'revenue_received' => [
                            'six_months' => $revenueSixMonths,
                            'twelve_months' => $revenueTwelveMonths,
                            'lifetime' => $revenueLifetime,
                        ],
                        'one_to_one' => [
                            'this_week' => $otoThisWeek,
                            'six_months' => $otoSixMonths,
                            'twelve_months' => $otoTwelveMonths,
                            'lifetime' => $otoLifetime
                        ],
                        'visitors' => [
                            'this_week' => $visitorsThisWeek,
                            'six_months' => $visitorsSixMonths,
                            'twelve_months' => $visitorsTwelveMonths,
                            'lifetime' => $visitorsLifetime
                        ]
                    ]
                ]
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch user details',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get all requests (sent and received) for the authenticated user
     */
    public function getAllRequests(Request $request)
    {
        try {
            $userId = $request->user()->id;

            // Get referrals
            $sentReferrals = Referral::where('from', $userId)
                ->get()
                ->map(function ($item) {
                    return [
                        'id' => $item->id,
                        'type' => 'referral',
                        'direction' => 'sent',
                        'from' => $item->from,
                        'to' => $item->to,
                        'status' => $item->referral_status,
                        'created_at' => $item->created_at,
                        'updated_at' => $item->updated_at,
                        'data' => $item
                    ];
                });

            $receivedReferrals = Referral::where('to', $userId)
                ->get()
                ->map(function ($item) {
                    return [
                        'id' => $item->id,
                        'type' => 'referral',
                        'direction' => 'received',
                        'from' => $item->from,
                        'to' => $item->to,
                        'status' => $item->referral_status,
                        'created_at' => $item->created_at,
                        'updated_at' => $item->updated_at,
                        'data' => $item
                    ];
                });

            // Get thank you requests
            $sentThanks = ThankYou::where('from', $userId)
                ->get()
                ->map(function ($item) {
                    return [
                        'id' => $item->id,
                        'type' => 'thank_you',
                        'direction' => 'sent',
                        'from' => $item->from,
                        'to' => $item->to,
                        'created_at' => $item->created_at,
                        'updated_at' => $item->updated_at,
                        'data' => $item
                    ];
                });

            $receivedThanks = ThankYou::where('to', $userId)
                ->get()
                ->map(function ($item) {
                    return [
                        'id' => $item->id,
                        'type' => 'thank_you',
                        'direction' => 'received',
                        'from' => $item->from,
                        'to' => $item->to,
                        'created_at' => $item->created_at,
                        'updated_at' => $item->updated_at,
                        'data' => $item
                    ];
                });

            // Get one-to-one requests
            $sentOneToOne = OneToOne::where('user_id', $userId)
                ->get()
                ->map(function ($item) {
                    return [
                        'id' => $item->id,
                        'type' => 'one_to_one',
                        'direction' => 'sent',
                        'from' => $item->user_id,
                        'to' => $item->met_with,
                        'meeting_date' => $item->meeting_date,
                        'created_at' => $item->created_at,
                        'updated_at' => $item->updated_at,
                        'data' => $item
                    ];
                });

            $receivedOneToOne = OneToOne::where('met_with', $userId)
                ->get()
                ->map(function ($item) {
                    return [
                        'id' => $item->id,
                        'type' => 'one_to_one',
                        'direction' => 'received',
                        'from' => $item->user_id,
                        'to' => $item->met_with,
                        'meeting_date' => $item->meeting_date,
                        'created_at' => $item->created_at,
                        'updated_at' => $item->updated_at,
                        'data' => $item
                    ];
                });

            // Combine all requests
            $allRequests = collect()
                ->concat($sentReferrals)
                ->concat($receivedReferrals)
                ->concat($sentThanks)
                ->concat($receivedThanks)
                ->concat($sentOneToOne)
                ->concat($receivedOneToOne)
                ->sortByDesc('created_at')
                ->values();

            // Get user details for from/to fields
            $userIds = $allRequests->pluck('from')
                ->concat($allRequests->pluck('to'))
                ->unique();

            $users = User::whereIn('id', $userIds)
                ->get(['id', 'name', 'email', 'profile_photo'])
                ->keyBy('id');

            // Add user details to requests
            $allRequests = $allRequests->map(function ($item) use ($users) {
                $item['from_user'] = $users[$item['from']] ?? null;
                $item['to_user'] = $users[$item['to']] ?? null;
                return $item;
            });

            return response()->json([
                'status' => 'success',
                'data' => [
                    'total' => $allRequests->count(),
                    'requests' => $allRequests
                ]
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch requests',
                'error' => $e->getMessage()
            ], 500);
        }
    }
   public function getPositions()
   {

   }
}
