<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Ambil ID organizer dan kategori acara yang ada
        $organizers = DB::table('organizers')->pluck('id')->toArray();
        $categories = DB::table('event__categories')->pluck('id')->toArray();

        // Cek jika tidak ada organizer atau kategori
        if (empty($organizers) || empty($categories)) {
            return; // Jika tidak ada organizer atau kategori, keluar dari fungsi
        }

        for ($i = 0; $i < 6; $i++) {
            DB::table('events')->insert([
                'title' => $faker->sentence(3), // Judul acara
                'venue' => $faker->address, // Lokasi acara
                'date' => $faker->date(), // Tanggal acara
                'start_time' => $faker->time(), // Waktu mulai acara
                'description' => $faker->text(200), // Deskripsi acara
                'booking_url' => $faker->url, // URL untuk booking
                'tags' => implode(', ', $faker->words(3)), // Tag acara, digabung dengan koma
                'organizer_id' => $faker->randomElement($organizers), // Ambil ID organizer yang valid
                'event_category_id' => $faker->randomElement($categories), // Ambil ID kategori yang valid
                'active' => $faker->boolean(80), // Status aktif (80% kemungkinan aktif)
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}