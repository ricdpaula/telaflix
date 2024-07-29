<?php

require "vendor/autoload.php";
use Ricdpaula\Telaflix\Buscador;

$client = new \GuzzleHttp\Client();
$buscador = new Buscador($client);

