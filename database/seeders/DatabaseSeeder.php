<?php

namespace Database\Seeders;

use App\Models\booklist;
use App\Models\library;
use App\Models\myLibrary;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //    library::factory(20)->create();
    myLibrary::factory(20)->create();
    }
}
