<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator;
use Illuminate\View\View;
use App\Models\User;

class UserController extends Controller
{
    public function form(): View
    {
        $districts = \App\Models\District::orderBy('name')->get();
        return view('membership', compact('districts'));
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'name2' => 'nullable|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'nullable|string|max:255',
            'gender' => 'required|string|max:20',
            'dob' => 'nullable|string|max:50',
            'mobile' => 'required|string|max:15|unique:users,mobile',
            'whatsapp' => 'nullable|string|max:15',
            'email' => 'nullable|string|email|max:255|unique:users,email',
            'adhar_no' => 'nullable|string|max:30',
            'ppatra' => 'nullable|string|max:50',
            'house_no' => 'nullable|string|max:100',
            'city' => 'required|string|max:255',
            'tahasil' => 'nullable|string|max:255',
            'district' => 'required|string|max:255',
            'state' => 'nullable|string|max:100',
            'thana' => 'nullable|string|max:100',
            'post_office' => 'nullable|string|max:100',
            'pin_code' => 'nullable|string|max:20',
            'current_address' => 'nullable|string|max:500',
            'panchayat' => 'nullable|string|max:255',
            'vidhansabha' => 'nullable|string|max:255',
            'loksabha' => 'nullable|string|max:255',
            'edu' => 'nullable|string|max:255',
            'computer' => 'nullable|string|max:255',
            'ruchi' => 'nullable|array',
            'ruchi.*' => 'string|max:100',
            'occupation' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'other_des' => 'nullable|string|max:500',
            'bio' => 'nullable|string|max:1000',
            'profile_photo' => 'nullable|image|max:5120',
        ], [
            'name.required' => 'नाव (नाम) लिखना अनिवार्य हे।',
            'father_name.required' => 'पिता / पति के नाव लिखना अनिवार्य हे।',
            'mobile.required' => 'मोबाइल नंबर लिखना अनिवार्य हे।',
            'mobile.unique' => 'यह मोबाइल नंबर पहले से पंजीकृत है।',
            'email.unique' => 'यह ईमेल पहले से पंजीकृत है।',
            'city.required' => 'गांव / शहर / वार्ड का नाम अनिवार्य है।',
            'district.required' => 'जिला चुनना अनिवार्य है।',
        ]);

        $firstName = explode(' ', trim($validated['name']))[0];
        $cleanFirstName = preg_replace('/[^A-Za-z0-9]/', '', $firstName) ?: 'Member';
        $un_en_password = env('APP_INITIALS', 'CGKS') . '@' . strtolower($cleanFirstName) . '@' . rand(1000, 9999);

        $photoPath = null;
        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $fileName = 'user_' . time() . '_' . rand(100, 999) . '.' . $file->getClientOriginalExtension();
            $photoPath = $file->storeAs('profile_photos', $fileName, 'public');
        }

        try {
            // Address assembly
            $addrParts = array_filter([
                !empty($validated['house_no']) ? 'मकान नं: ' . $validated['house_no'] : null,
                $validated['city'] ?? null,
                !empty($validated['tahasil']) ? 'तहसील: ' . $validated['tahasil'] : null,
                !empty($validated['thana']) ? 'थाना: ' . $validated['thana'] : null,
                !empty($validated['post_office']) ? 'पो.आ.: ' . $validated['post_office'] : null,
                $validated['district'] ?? null,
                !empty($validated['pin_code']) ? 'पिन: ' . $validated['pin_code'] : null,
                $validated['state'] ?? 'छत्तीसगढ़',
            ]);
            $fullAddress = implode(', ', $addrParts);

            // Purakhauti / current assembly
            $purakhautiParts = array_filter([
                !empty($validated['current_address']) ? 'पुरखउती गाँव: ' . $validated['current_address'] : null,
                !empty($validated['panchayat']) ? 'पंचायत/निगम: ' . $validated['panchayat'] : null,
                !empty($validated['vidhansabha']) ? 'विधानसभा: ' . $validated['vidhansabha'] : null,
                !empty($validated['loksabha']) ? 'लोकसभा: ' . $validated['loksabha'] : null,
            ]);
            $purakhautiStr = implode(', ', $purakhautiParts);

            // Bio & extra info assembly
            $bioLines = [];
            if (!empty($validated['name2'])) $bioLines[] = 'अंग्रेजी नाव: ' . strtoupper($validated['name2']);
            if (!empty($validated['father_name'])) $bioLines[] = 'पिता/पति: ' . $validated['father_name'];
            if (!empty($validated['mother_name'])) $bioLines[] = 'माता: ' . $validated['mother_name'];
            if (!empty($validated['gender'])) $bioLines[] = 'लिंग: ' . $validated['gender'];
            if (!empty($validated['dob'])) $bioLines[] = 'जनम तिथि: ' . $validated['dob'];
            if (!empty($validated['adhar_no'])) $bioLines[] = 'आधार नं: ' . $validated['adhar_no'];
            if (!empty($validated['ppatra'])) $bioLines[] = 'मतदाता पत्र: ' . $validated['ppatra'];
            if (!empty($validated['edu'])) $bioLines[] = 'पढ़ई: ' . $validated['edu'];
            if (!empty($validated['computer'])) $bioLines[] = 'कंप्यूटर: ' . $validated['computer'];
            if (!empty($validated['ruchi'])) $bioLines[] = 'रूचि: ' . implode(', ', (array)$validated['ruchi']);
            if (!empty($validated['facebook'])) $bioLines[] = 'फेसबुक: ' . $validated['facebook'];
            if (!empty($validated['twitter'])) $bioLines[] = 'ट्विटर: ' . $validated['twitter'];
            if (!empty($validated['other_des'])) $bioLines[] = 'अन्य संगठन दायित्व: ' . $validated['other_des'];
            if (!empty($validated['bio'])) $bioLines[] = 'विचार: ' . $validated['bio'];

            $user = User::create([
                'name' => $validated['name'],
                'name2' => !empty($validated['name2']) ? strtoupper($validated['name2']) : null,
                'father_name' => $validated['father_name'] ?? null,
                'mother_name' => $validated['mother_name'] ?? null,
                'dob' => $validated['dob'] ?? null,
                'gender' => $validated['gender'] ?? null,
                'adhar_no' => $validated['adhar_no'] ?? null,
                'ppatra' => $validated['ppatra'] ?? null,
                'house_no' => $validated['house_no'] ?? null,
                'mobile' => $validated['mobile'],
                'whatsapp' => $validated['whatsapp'] ?? null,
                'email' => !empty($validated['email']) ? $validated['email'] : null,
                'city' => $validated['city'] ?? null,
                'tahasil' => $validated['tahasil'] ?? null,
                'district' => $validated['district'] ?? null,
                'state' => $validated['state'] ?? 'छत्तीसगढ़',
                'thana' => $validated['thana'] ?? null,
                'post_office' => $validated['post_office'] ?? null,
                'pin_code' => $validated['pin_code'] ?? null,
                'address' => $fullAddress ?: null,
                'current_address' => $validated['current_address'] ?? null,
                'panchayat' => $validated['panchayat'] ?? null,
                'vidhansabha' => $validated['vidhansabha'] ?? null,
                'loksabha' => $validated['loksabha'] ?? null,
                'edu' => $validated['edu'] ?? null,
                'computer' => $validated['computer'] ?? null,
                'ruchi' => $validated['ruchi'] ?? null,
                'occupation' => $validated['occupation'] ?? null,
                'designation' => $validated['designation'] ?? null,
                'facebook' => $validated['facebook'] ?? null,
                'twitter' => $validated['twitter'] ?? null,
                'other_des' => $validated['other_des'] ?? null,
                'bio' => $validated['bio'] ?? null,
                'profile_photo' => $photoPath,
                'password' => Hash::make($un_en_password),
                'role' => 'user',
                'active' => true,
            ]);

            $regId = 'CKS' . (100 + $user->id);
            $user->referral_code = $regId;
            $user->save();

            return redirect()->back()
                ->with('success', 'बधाई! छत्तीसगढ़िया क्रान्ति सेना म आप मन के सदस्यता पाती सफलतापूर्वक जमा होगे हे।')
                ->with('reg_id', $regId)
                ->with('member_name', $user->name);
        } catch (\Exception $e) {
            report($e);
            return redirect()->back()->withInput()->with('error', 'पंजीकरण म समस्या आईस: ' . $e->getMessage());
        }
    }

    public function appRegisterForm(Request $request): View
    {
        $districts = \App\Models\District::orderBy('name')->get();
        $referralCode = $request->query('ref', $request->route('ref', ''));
        $referrer = null;
        if (!empty($referralCode)) {
            $referrer = User::where('referral_code', $referralCode)->first();
        }
        return view('register', compact('districts', 'referralCode', 'referrer'));
    }

    public function appRegisterStore(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15|unique:users,mobile|regex:/^[0-9]{10,15}$/',
            'email' => 'nullable|string|email|max:255|unique:users,email',
            'address' => 'required|string|max:500',
            'current_address' => 'required|string|max:500',
            'whatsapp' => 'nullable|string|max:15',
            'district' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'referral_code' => 'required|string|exists:users,referral_code',
            'password' => 'required|string|min:4|confirmed',
        ], [
            'name.required' => 'नाम लिखना अनिवार्य है।',
            'mobile.required' => 'मोबाइल नंबर लिखना अनिवार्य है।',
            'mobile.unique' => 'यह मोबाइल नंबर पहले से पंजीकृत है।',
            'mobile.regex' => 'मोबाइल नंबर कम से कम 10 अंकों का होना चाहिए।',
            'email.unique' => 'यह ईमेल पहले से पंजीकृत है।',
            'address.required' => 'पुर्खौती निवास का पता अनिवार्य है।',
            'current_address.required' => 'वर्तमान निवास का पता अनिवार्य है।',
            'district.required' => 'जिला चुनना अनिवार्य है।',
            'city.required' => 'शहर का नाम अनिवार्य है।',
            'referral_code.required' => 'रेफरल कोड लिखना अनिवार्य है।',
            'referral_code.exists' => 'अमान्य रेफरल कोड।',
            'password.required' => 'पासवर्ड अनिवार्य है।',
            'password.min' => 'पासवर्ड कम से कम 4 अक्षरों का होना चाहिए।',
            'password.confirmed' => 'पासवर्ड और पुष्टि पासवर्ड मेल नहीं खाते।',
        ]);

        try {
            $referrer = User::where('referral_code', $validated['referral_code'])->first();
            if (!$referrer) {
                return redirect()->back()->withInput()->withErrors(['referral_code' => 'अमान्य रेफरल कोड।']);
            }

            $uniqueCode = strtoupper(\Illuminate\Support\Str::random(8));
            while (User::where('referral_code', $uniqueCode)->exists()) {
                $uniqueCode = strtoupper(\Illuminate\Support\Str::random(8));
            }

            $user = User::create([
                'name' => $validated['name'],
                'mobile' => $validated['mobile'],
                'email' => !empty($validated['email']) ? $validated['email'] : null,
                'address' => $validated['address'],
                'current_address' => $validated['current_address'],
                'whatsapp' => $validated['whatsapp'] ?? null,
                'district' => $validated['district'],
                'city' => $validated['city'],
                'referral_code' => $uniqueCode,
                'password' => Hash::make($validated['password']),
                'role' => 'user',
                'active' => true,
            ]);

            \App\Models\Referral::create([
                'referred_by' => $referrer->id,
                'referred_to' => $user->id,
            ]);

            return redirect()->back()
                ->with('success', 'पंजीकरण सफल रहा! आप छत्तीसगढ़िया क्रान्ति सेना ऐप डाउनलोड कर लॉगिन कर सकते हैं।')
                ->with('referral_code', $uniqueCode)
                ->with('user_name', $user->name);
        } catch (\Exception $e) {
            report($e);
            return redirect()->back()->withInput()->with('error', 'पंजीकरण में त्रुटि: ' . $e->getMessage());
        }
    }
}
