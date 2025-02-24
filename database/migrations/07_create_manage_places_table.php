<?php

use App\Models\Place_rando;
use App\Models\User;
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
        Schema::create('manage_places', function (Blueprint $table) {
            $table->primary(['user_id', 'place_rando_id']);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Place_rando::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manage_places');
    }
};
