<?php

namespace Database\Seeders;

use App\Models\Esemeny;
use App\Models\Kategoria;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        $zene = Kategoria::create(['kategoria_nev' => 'Zene']);
        $tanc = Kategoria::create(['kategoria_nev' => 'tanc']);


         Esemeny::create([
            'esemeny_nev'  => 'Neptanc',
            'leiras' => 'ez egy neptanc kategoria leiras',
            
            'resztvevok'  => 10,
            'ar' => 2500,
        ]);
          Esemeny::create([
            'esemeny_nev'  => 'Konnyuzene',
            'leiras' => 'ez egy Konnyuzene kategoria leiras',
            
            'resztvevok'  => 10,
            'ar' => 3500,
        ]);
          Esemeny::create([
            'esemeny_nev'  => 'Flashmob',
            'leiras' => 'ez egy Flashmob kategoria leiras',
            
            'resztvevok'  => 40,
            'ar' => 1500,
        ]);
          Esemeny::create([
            'esemeny_nev'  => 'Modern tanc',
            'leiras' => 'ez egy moderntanc kategoria leiras',
            
            'resztvevok'  => 20,
            'ar' => 2600,
        ]);
    }
}
