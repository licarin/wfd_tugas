<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Dummy data untuk kategori acara
        $eventCategories = [
            ['name' => 'Expo'],
            ['name' => 'Concert'],
            ['name' => 'Conference'],
        ];

        // Menggunakan DB facade untuk menyisipkan data ke dalam tabel event_categories
        DB::table('event__categories')->insert($eventCategories);
    }
}
