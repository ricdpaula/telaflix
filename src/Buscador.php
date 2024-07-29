<?php

namespace Ricdpaula\Telaflix;
use GuzzleHttp\ClientInterface;

class Buscador {
    private $client;
    public function __construct(ClientInterface $client){
        $this->client = $client;
    }

    public function buscar(string $filme): array{
        $response = $this->client->request('GET', 'https://www.omdbapi.com/?apikey=137f3065&t=' . $filme, ['verify'=>false]);
        $arrayFilmes = json_decode($response->getBody(), true);
        return $arrayFilmes;
    }
}