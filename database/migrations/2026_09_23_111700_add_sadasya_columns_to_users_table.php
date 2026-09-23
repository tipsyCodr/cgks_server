<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Personal Details
            $table->string('name2')->nullable()->after('name');
            $table->string('father_name')->nullable()->after('name2');
            $table->string('mother_name')->nullable()->after('father_name');
            $table->string('dob')->nullable()->after('mother_name');
            $table->string('gender')->nullable()->after('dob');
            $table->string('adhar_no')->nullable()->after('whatsapp');
            $table->string('ppatra')->nullable()->after('adhar_no');

            // Current Address Breakdown
            $table->string('house_no')->nullable()->after('ppatra');
            $table->string('tahasil')->nullable()->after('city');
            $table->string('state')->nullable()->default('छत्तीसगढ़')->after('district');
            $table->string('thana')->nullable()->after('state');
            $table->string('post_office')->nullable()->after('thana');
            $table->string('pin_code')->nullable()->after('post_office');

            // Ancestral / Administrative / Political
            $table->string('panchayat')->nullable()->after('current_address');
            $table->string('vidhansabha')->nullable()->after('panchayat');
            $table->string('loksabha')->nullable()->after('vidhansabha');

            // Education, Skills & Interests
            $table->string('edu')->nullable()->after('loksabha');
            $table->string('computer')->nullable()->after('edu');
            $table->json('ruchi')->nullable()->after('computer');

            // Social & Other
            $table->string('facebook')->nullable()->after('ruchi');
            $table->string('twitter')->nullable()->after('facebook');
            $table->text('other_des')->nullable()->after('twitter');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'name2',
                'father_name',
                'mother_name',
                'dob',
                'gender',
                'adhar_no',
                'ppatra',
                'house_no',
                'tahasil',
                'state',
                'thana',
                'post_office',
                'pin_code',
                'panchayat',
                'vidhansabha',
                'loksabha',
                'edu',
                'computer',
                'ruchi',
                'facebook',
                'twitter',
                'other_des',
            ]);
        });
    }
};
