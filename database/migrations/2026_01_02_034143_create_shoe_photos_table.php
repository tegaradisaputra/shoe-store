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
        Schema::create('shoe_photos', function (Blueprint $table) {
            $table->id();
            $table->string('photo');

            // ERD | relasi antara tabel shoe_photo ke tabel shoe
            $table->foreignId('shoe_id')->constrained()->cascadeOnDelete();
            
            $table->softDeletes(); // deleted_at

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shoe_photos');
    }
};
