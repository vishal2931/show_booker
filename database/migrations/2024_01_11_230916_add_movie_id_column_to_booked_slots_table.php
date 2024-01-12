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
        Schema::table('booked_slots', function (Blueprint $table) {
            $table->foreignId('movie_id')->after('screen_id')->references('id')->on('movies')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('booked_slots', function (Blueprint $table) {
            $table->removeColumn('movie_id');
        });
    }
};
