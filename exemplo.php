<?php

require_once "vendor/autoload.php";

use Wead\DigitalCep\Search;



$busca = new Search;

$resultado = $busca->getAddressFromZipcode('89074605');

print_r($resultado);