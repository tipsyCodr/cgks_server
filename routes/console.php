<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('mail:test {email} {--welcome}', function ($email) {
    $this->info("Sending test email to: {$email}...");

    try {
        if ($this->option('welcome')) {
            $user = \App\Models\User::where('email', $email)->first() ?? new \App\Models\User([
                'name' => 'Test Member',
                'mobile' => '9999999999',
                'email' => $email,
                'referral_code' => 'TEST1234',
            ]);

            $user->notify(new \App\Notifications\WelcomeMemberNotification($user, 'Test@1234'));
            $this->info("Welcome email sent successfully to {$email}!");
        } else {
            \Illuminate\Support\Facades\Mail::raw('This is a test email from CGKS server.', function ($message) use ($email) {
                $message->to($email)->subject('CGKS Server Test Email');
            });
            $this->info("Simple test email sent successfully to {$email}!");
        }
    } catch (\Throwable $e) {
        $this->error("Mail failed: " . $e->getMessage());
    }
})->purpose('Send a test email to verify mail configuration');

Artisan::command('users:update-member-ids', function () {
    $users = \App\Models\User::orderBy('id')->get();
    $this->info("Found {$users->count()} users. Updating member IDs based on RTO districts...");

    $updated = 0;
    foreach ($users as $user) {
        $newCode = \App\Services\MemberIdService::generate($user->district, $user->id);
        if ($user->referral_code !== $newCode) {
            $oldCode = $user->referral_code ?? 'NULL';
            $user->referral_code = $newCode;
            $user->save();
            $updated++;
            $this->line("User #{$user->id} ({$user->name}, District: '{$user->district}'): {$oldCode} -> {$newCode}");
        }
    }

    $this->info("Complete! Updated {$updated} user member IDs.");
})->purpose('Update all user referral/member codes according to RTO district mapping');


