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
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('title'); // Judul acara
            $table->string('venue'); // Lokasi acara
            $table->date('date'); // Tanggal acara
            $table->time('start_time'); // Waktu mulai acara
            $table->text('description'); // Deskripsi acara
            $table->string('booking_url')->nullable(); // URL untuk booking, nullable (bisa kosong)
            $table->string('tags'); // Tag acara
            
            // Foreign key ke tabel organizers
            $table->foreignId('organizer_id')->constrained('organizers')->onDelete('cascade');
            // Foreign key ke tabel event_categories
            $table->foreignId('event_category_id')->constrained('event__categories')->onDelete('cascade');
            $table->boolean('active')->default(1); // Status aktif, default 1 (aktif)
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
