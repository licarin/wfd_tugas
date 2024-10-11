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
        Schema::create('event__categories', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('name'); // Nama kategori event
            $table->boolean('active')->default(1); // Status aktif, default 1 (aktif)
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event__categories');
    }
};
