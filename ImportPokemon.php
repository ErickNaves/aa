<?php

namespace Projeto\Erick;

require ("./vendor/autoload.php");

use Pokemon\Pokemon;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

Pokemon::Options(['verify' => true]);
Pokemon::ApiKey($_ENV['pokemon_key']);