<?php

use Pokemon\Models\Pagination;
use Pokemon\Pokemon;

require_once __DIR__ . '../vendor/autoload.php';

$response = Pokemon::Card()->find('xyp-XY93');

$data = json_decode($response->toJson(), true);
$imageUrl = isset($data['images']['large']) ? $data['images']['large'] : '';

$response2 = Pokemon::Card()->find('smp-SM215');

$data2 = json_decode($response2->toJson(), true);
$imageUrl2 = isset($data2['images']['large']) ? $data2['images']['large'] : '';

// $pokemon = Pokemon::Card()->where(['name' => 'darkrai'])->all();

// foreach ($pokemon as $pokemonImg){ 
//     $dados = json_decode($pokemonImg->toJson(), true); 
//     $pokeImg = isset($dados['images']['large']) ? $dados['images']['large'] : '';
//     $rep[] = $pokeImg;
// }

// $pokemon = Pokemon::Card()->where(['types' => 'fire'])->all();
// foreach ($pokemon as $pokemonImg){ 
//     $dados = json_decode($pokemonImg->toJson(), true); 
//     $pokeImg = isset($dados['images']['large']) ? $dados['images']['large'] : '';
//     $rep[] = $pokeImg;
// }


