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
        Schema::create('organizers', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('name'); // Nama organizer
            $table->string('description'); // Deskripsi organizer
            $table->string('facebook_link')->nullable(); // Link ke Facebook, nullable berarti bisa kosong
            $table->string('x_link')->nullable(); // Link ke platform X (sebelumnya Twitter)
            $table->string('website_link')->nullable(); // Link ke situs web
            $table->boolean('active')->default(1); // Status aktif, default 1 (aktif)
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizers');
    }
};
