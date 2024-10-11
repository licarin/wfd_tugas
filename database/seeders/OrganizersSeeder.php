<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Dummy data untuk organizer
        $organizers = [
            [
                'name' => 'Organizer 1',
                'description' => 'Deskripsi Organizer 1',
                'facebook_link' => 'https://facebook.com/organizer1',
                'x_link' => 'https://x.com/organizer1',
                'website_link' => 'https://organizer1.com',
                'active' => 1,
            ],
            [
                'name' => 'Organizer 2',
                'description' => 'Deskripsi Organizer 2',
                'facebook_link' => 'https://facebook.com/organizer2',
                'x_link' => 'https://x.com/organizer2',
                'website_link' => 'https://organizer2.com',
                'active' => 1,
            ],
            [
                'name' => 'Organizer 3',
                'description' => 'Deskripsi Organizer 3',
                'facebook_link' => 'https://facebook.com/organizer3',
                'x_link' => 'https://x.com/organizer3',
                'website_link' => 'https://organizer3.com',
                'active' => 1,
            ],
            [
                'name' => 'Organizer 4',
                'description' => 'Deskripsi Organizer 4',
                'facebook_link' => 'https://facebook.com/organizer4',
                'x_link' => 'https://x.com/organizer4',
                'website_link' => 'https://organizer4.com',
                'active' => 1,
            ],
            [
                'name' => 'Organizer 5',
                'description' => 'Deskripsi Organizer 5',
                'facebook_link' => 'https://facebook.com/organizer5',
                'x_link' => 'https://x.com/organizer5',
                'website_link' => 'https://organizer5.com',
                'active' => 1,
            ],
        ];

        // Menggunakan DB facade untuk menyisipkan data ke dalam tabel organizers
        DB::table('organizers')->insert($organizers);
    }
}
