<?php

require_once "vendor/autoload.php";

use \Soares\Dio_Cep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('01001000');

print_r($resultado);