<?php
// Substitua 'SUA_CHAVE_DE_API' pela sua chave de API real
$apiKey = 'b97f2452-0ef9-442c-b3ff-6ec28855908d';
$baseUrl = 'https://api.pokemontcg.io/v2/cards';

// O nome e o tipo do Pokémon que você deseja procurar
$nomePokemon = 'marnie';
$tipoPokemon = 'fogo';

// Monta a URL da solicitação
$requestUrl = "$baseUrl?q=name:$nomePokemon";

// Configura as opções da solicitação HTTP
$options = [
    'http' => [
        'header' => "X-Api-Key: $apiKey"
    ]
];

// Faz a solicitação HTTP
$response = file_get_contents($requestUrl, false, stream_context_create($options));

// Decodifica a resposta JSON
$data = json_decode($response, true);

// Obtém a URL da imagem do primeiro resultado (supondo que haja resultados)
if (isset($data['data'][0]['images']['small'])) {
    $imageUrl = $data['data'][0]['images']['small'];
    echo "<img src='$imageUrl' alt='$nomePokemon'>";
} else {
    echo "Pokémon não encontrado.";
}
?>
