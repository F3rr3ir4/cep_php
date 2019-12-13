<?php

use \Wead\CepPhp\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('89074605');

print_r($resultado);