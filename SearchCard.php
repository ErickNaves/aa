<?php

use Pokemon\Pokemon;

class SearchCard
{
    private $name;

    public function __construct(string $name)
    {
       $this->name = $name;
    }

    public function search()
    {
        $pokemon = Pokemon::Card()->where(['name' => $this->name])->all();

        foreach ($pokemon as $pokemonImg){ 
            $dados = json_decode($pokemonImg->toJson(), true); 
            $pokeImg = isset($dados['images']['large']) ? $dados['images']['large'] : '';
            $rep[] = $pokeImg;
        }

        $pokemon = Pokemon::Card()->where(['types' => 'fire'])->all();
        foreach ($pokemon as $pokemonImg){ 
            $dados = json_decode($pokemonImg->toJson(), true); 
            $pokeImg = isset($dados['images']['large']) ? $dados['images']['large'] : '';
            $rep[] = $pokeImg;
        }
        return $rep;
    }

    public function ReturnName()
    {
        return $this->name;
    }
    
}