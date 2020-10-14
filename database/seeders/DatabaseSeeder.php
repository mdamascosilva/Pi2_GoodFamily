<?php

namespace Database\Seeders;

use App\Models\CategoriaNecessidade;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        
        $this->call([
            /*BairroSeeder::class,
            CidadeSeeder::class,
            RegiaoSeeder::class,
            LocalidadeSeeder::class,*/
            CategoriaSeed::class,
        ]);
        
    }
}
