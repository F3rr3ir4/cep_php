<?php

namespace Wead\DigitalCep;

class Search
{
    private $url = "https://viacep.com.br/ws/";

    public function getAddressFromZipcode(string $ZipCode): array
    {
        $ZipCode = preg_replace('/[^0-9]/im', '', $ZipCode);

        $get = file_get_contents($this->url . $ZipCode . "/json");
        
        return(array) json_decode($get);
    }
}
