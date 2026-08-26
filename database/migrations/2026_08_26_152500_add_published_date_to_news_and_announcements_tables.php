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
        if (Schema::hasTable('news') && !Schema::hasColumn('news', 'published_date')) {
            Schema::table('news', function (Blueprint $table) {
                $table->date('published_date')->nullable()->after('image_url');
            });
        }

        if (Schema::hasTable('announcements') && !Schema::hasColumn('announcements', 'published_date')) {
            Schema::table('announcements', function (Blueprint $table) {
                $table->date('published_date')->nullable()->after('image_url');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('news') && Schema::hasColumn('news', 'published_date')) {
            Schema::table('news', function (Blueprint $table) {
                $table->dropColumn('published_date');
            });
        }

        if (Schema::hasTable('announcements') && Schema::hasColumn('announcements', 'published_date')) {
            Schema::table('announcements', function (Blueprint $table) {
                $table->dropColumn('published_date');
            });
        }
    }
};
