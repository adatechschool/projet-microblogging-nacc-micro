<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */ 
    public function run(): void
    {
        $posts = [
            ['id' => 1, 'image_path' => 'img/IMG_1826.jpg', 'content' => 'Marie parle en codes, Patrick est déjà perdu. Qui aurait cru que les SMS seraient plus rapides que la parole !'],
            ['id' => 2, 'image_path' => 'img/IMG_1825.jpg', 'content' => 'Quand la technologie parle, Patrick s\'interroge. Marie, toujours connectée, trouve la solution'],
            ['id' => 3, 'image_path' => 'img/IMG_1824.jpg', 'content' => 'Le mystère du Bacalhau enfin résolu en Bretagne. Patrick, lui, s\'inquiète plus du sucre dans son café.'],
            ['id' => 4, 'image_path' => 'img/IMG_1823.jpg', 'content' => 'Patrick découvre le Bacalhau, ou plutôt la "morue". Une leçon de cuisine qui valait bien un café sucré !'],
            ['id' => 5, 'image_path' => 'img/IMG_1822.jpg', 'content' => 'Débat culinaire au bureau: Bacalhau ou Morue ? Patrick, déjà distrait par son portable, acquiesce.'],
            ['id' => 6, 'image_path' => 'img/IMG_1820.jpg', 'content' => 'Projet infernal, mais heureusement sans Vincent. Patrick rêve d\'un titre de Boss pour compenser.'],
            ['id' => 7, 'image_path' => 'img/IMG_1814.jpg', 'content' => 'Réunion houleuse sur les punchlines et Ada. Carlos, imperturbable, questionne la vie.'],
            ['id' => 8, 'image_path' => 'img/IMG_1813.jpg', 'content' => 'Jeu de punchlines et katas avec Ada. Mathilde sur le point de tout lâcher'],
            ['id' => 9, 'image_path' => 'img/IMG_1812.jpg', 'content' => 'Le grand jeu des punchlines commence. Carlos a déjà jeté l\'éponge.'],
            ['id' => 10, 'image_path' => 'img/IMG_1811.jpg', 'content' => 'DJ La Toul’ balance les punchlines. Anael, rebaptisé, proteste: "Sans déconner?"']
        ];

        foreach ($posts as $postData) {
            Log::info('Inserting post: ' . json_encode($postData));
            Post::create($postData);
        }
    }
}
