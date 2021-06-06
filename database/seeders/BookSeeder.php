<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // /$this->call(BookSeeder::class);
        \App\Models\Book::factory(5)->create();
    }
}
