<?php

use App\Models\Artist;
use App\Models\Signing;
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
        Schema::create('artist_signing', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignIdFor(Artist::class, 'artist_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(Signing::class, 'signing_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist_signing');
    }
};
