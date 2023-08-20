<?php

    require_once __DIR__ . '/vendor/autoload.php';
    require_once __DIR__ . '/SearchCard.php';

    $nome = $_POST['pokemonName'];
    
    $pokemonNovo = new SearchCard($nome);
    $rep = $pokemonNovo->search();

    $rep_json = json_encode($rep);

    // Redirecionar para o arquivo index.php com os resultados da pesquisa como parâmetro de URL
    header('Location: /index.php?rep=' . urlencode($rep_json));