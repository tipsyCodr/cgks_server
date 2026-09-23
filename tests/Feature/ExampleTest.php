<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $responseAbout = $this->get('/about-us');
        $responseAbout->assertStatus(200);

        $responsePress = $this->get('/press-release');
        $responsePress->assertStatus(200);

        $news = \App\Models\News::first();
        if ($news) {
            $responsePressView = $this->get('/press-release/' . $news->id);
            $responsePressView->assertStatus(200);
        }

        $responseKaryakram = $this->get('/karyakram');
        $responseKaryakram->assertStatus(200);

        $responseAandolan = $this->get('/aandolan');
        $responseAandolan->assertStatus(200);

        $andolan = \App\Models\News::whereHas('category', fn($q) => $q->where('slug', 'andolan'))->first();
        if ($andolan) {
            $responseAandolanView = $this->get('/aandolan/' . $andolan->id);
            $responseAandolanView->assertStatus(200);
        }

        $responseCulture = $this->get('/bhaakha-au-sanskrti');
        $responseCulture->assertStatus(200);

        $responseCultureAlias = $this->get('/chhattisgarh-sanskriti');
        $responseCultureAlias->assertStatus(200);

        $cultureItem = \App\Models\News::whereHas('category', fn($q) => $q->where('slug', 'bhaakha-au-sanskrti'))->first();
        if ($cultureItem) {
            $responseCultureView = $this->get('/bhaakha-au-sanskrti/' . $cultureItem->id);
            $responseCultureView->assertStatus(200);

            $responseCultureAliasView = $this->get('/chhattisgarh-sanskriti/' . $cultureItem->id);
            $responseCultureAliasView->assertStatus(200);
        }

        $responsePurakha = $this->get('/purakha');
        $responsePurakha->assertStatus(200);

        $purakhaItem = \App\Models\News::whereHas('category', fn($q) => $q->where('slug', 'purakha'))->first();
        if ($purakhaItem) {
            $responsePurakhaView = $this->get('/purakha/' . $purakhaItem->id);
            $responsePurakhaView->assertStatus(200);
        }

        $responseGallery = $this->get('/gallery');
        $responseGallery->assertStatus(200);

        $responsePhotoGallery = $this->get('/photo-gallery');
        $responsePhotoGallery->assertStatus(200);

        $album = \App\Models\Gallery::first();
        if ($album) {
            $responseAlbumView = $this->get('/photo-gallery/' . $album->id);
            $responseAlbumView->assertStatus(200);
        }

        $responseVideoGallery = $this->get('/video-gallery');
        $responseVideoGallery->assertStatus(200);

        $responseAudioGallery = $this->get('/audio-gallery');
        $responseAudioGallery->assertStatus(200);

        $responseContact = $this->get('/contact-us');
        $responseContact->assertStatus(200);

        $responseSampark = $this->get('/sampark');
        $responseSampark->assertStatus(200);

        $responseMembership = $this->get('/membership');
        $responseMembership->assertStatus(200);

        $responseOnlineMem = $this->get('/online-membership');
        $responseOnlineMem->assertStatus(200);

        $responseSadasyata = $this->get('/sadasyata');
        $responseSadasyata->assertStatus(200);

        $responseSadasya = $this->get('/sadasya');
        $responseSadasya->assertStatus(200);
    }

    public function test_membership_registration_submission(): void
    {
        $testMobile = '99999' . rand(10000, 99999);
        $response = $this->withoutMiddleware()->post('/membership/register', [
            'name' => 'परीक्षण सदस्य',
            'name2' => 'TEST MEMBER',
            'father_name' => 'श्री पिता जी',
            'gender' => 'पुरुष',
            'dob' => '1995-05-15',
            'mobile' => $testMobile,
            'whatsapp' => $testMobile,
            'email' => 'test_' . time() . '@cgks.org',
            'city' => 'रायपुर',
            'district' => 'रायपुर',
            'state' => 'छत्तीसगढ़',
            'occupation' => 'खेती किसानी',
            'ruchi' => ['समाजिक बुता', 'कला / संस्कृति'],
        ]);

        $response->assertSessionHas('success');
        $response->assertSessionHas('reg_id');

        $this->assertDatabaseHas('users', [
            'mobile' => $testMobile,
            'name' => 'परीक्षण सदस्य',
            'name2' => 'TEST MEMBER',
            'father_name' => 'श्री पिता जी',
            'gender' => 'पुरुष',
            'district' => 'रायपुर',
            'city' => 'रायपुर',
        ]);

        // Cleanup test user
        \App\Models\User::where('mobile', $testMobile)->delete();
    }

    public function test_app_registration_and_profile_update_api(): void
    {
        $referrer = \App\Models\User::firstOrCreate(
            ['mobile' => '9111100001'],
            [
                'name' => 'Referrer User',
                'password' => bcrypt('password'),
                'referral_code' => 'CGKSREF1',
                'role' => 'user',
                'active' => true,
            ]
        );

        $testMobile = '98888' . rand(10000, 99999);
        $registerPayload = [
            'name' => 'App New Member',
            'mobile' => $testMobile,
            'password' => 'pass1234',
            'referral_code' => $referrer->referral_code,
            'district' => 'दुर्ग',
            'city' => 'भिलाई',
            'email' => 'app_' . time() . rand(100, 999) . '@cgks.test',
            'address' => 'सेक्टर 1, भिलाई',
            'currentAddress' => 'ग्राम पाटन',
            'occupation' => 'निजी बेवसाय',
            'whatsapp' => $testMobile,
        ];

        // 1. Test Old App Registration API
        $regResponse = $this->postJson('/api/user/register', $registerPayload);
        $regResponse->assertStatus(200)
            ->assertJsonStructure(['user' => ['id', 'name', 'mobile'], 'token']);

        $userId = $regResponse->json('user.id');
        $user = \App\Models\User::find($userId);

        $this->assertNotNull($user);
        $this->assertEquals('App New Member', $user->name);
        $this->assertEquals('ग्राम पाटन', $user->current_address);

        // 2. Test Full Sadasya Profile Update via API
        $updatePayload = [
            'name' => 'App New Member Updated',
            'name2' => 'APP NEW MEMBER',
            'father_name' => 'राम कुमार',
            'mother_name' => 'श्रीमती देवी',
            'dob' => '1992-04-10',
            'gender' => 'पुरुष',
            'adhar_no' => '123456789012',
            'ppatra' => 'CG04123456',
            'house_no' => 'मकान नं 42',
            'city' => 'भिलाई',
            'tahasil' => 'दुर्ग',
            'district' => 'दुर्ग',
            'state' => 'छत्तीसगढ़',
            'thana' => 'सुपेला',
            'post_office' => 'भिलाई',
            'pin_code' => '490023',
            'current_address' => 'ग्राम पाटन',
            'panchayat' => 'पाटन',
            'vidhansabha' => 'पाटन',
            'loksabha' => 'दुर्ग',
            'edu' => 'स्नातक',
            'computer' => 'DCA',
            'ruchi' => ['खेती किसानी', 'साहित्य'],
            'occupation' => 'निजी बेवसाय',
            'designation' => 'संचालक',
            'facebook' => 'facebook.com/appmember',
            'twitter' => '@appmember',
            'other_des' => 'समाज सेवक',
            'bio' => 'संगठन सेवा उद्देश्य',
        ];

        $updateResponse = $this->actingAs($user, 'sanctum')->postJson('/api/update-profile', $updatePayload);
        $updateResponse->assertStatus(200)
            ->assertJson(['message' => 'Profile updated successfully']);

        $this->assertDatabaseHas('users', [
            'id' => $userId,
            'name2' => 'APP NEW MEMBER',
            'father_name' => 'राम कुमार',
            'mother_name' => 'श्रीमती देवी',
            'adhar_no' => '123456789012',
            'vidhansabha' => 'पाटन',
            'edu' => 'स्नातक',
            'facebook' => 'facebook.com/appmember',
        ]);

        // Cleanup
        \App\Models\Referral::where('referred_to', $userId)->delete();
        $user->tokens()->delete();
        $user->delete();
    }
}
