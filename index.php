<?php
include __DIR__.'/vendor/autoload.php';

use \App\Entity\contatos;

$contato = contatos::getContatos();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';