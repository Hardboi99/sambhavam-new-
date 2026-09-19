<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->longText('curriculum')->nullable()->after('description');
            $table->longText('key_features')->nullable()->after('curriculum');
            $table->longText('eligibility_fees')->nullable()->after('key_features');
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn(['curriculum', 'key_features', 'eligibility_fees']);
        });
    }
};