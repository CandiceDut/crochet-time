<?php

namespace Database\Seeders;

use App\Models\Crochet;
use Illuminate\Database\Seeder;

class CrochetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Crochet::insert([
            [
                'image' => 'chat.jpg',
                'titre' => 'Crochet Chat ',
                'prix' => 9.99,
                'quantite' => 10,
                'description' => 'Crochet fait main dun chat'
            ],
            [
                'image' => 'dino.jpg',
                'titre' => 'Crochet Dino',
                'prix' => 12.50,
                'quantite' => 5,
                'description' => 'Crochet artisanal de dino'
            ],
            [
                'image' => 'renard.jpg',
                'titre' => 'Crochet Renard',
                'prix' => 8.00,
                'quantite' => 20,
                'description' => 'Grand crochet renard'
            ],
        ]);
    }
}
