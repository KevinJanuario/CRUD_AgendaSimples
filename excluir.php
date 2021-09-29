<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Contatos;


//Validação do ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

$obContatos = Contatos::getCont($_GET['id']);

if(!$obContatos instanceof Contatos){
    header('location: index.php?status=error');
}

//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])){

    $obContatos -> excluir();

    header('location: index.php?status=success');
    exit;
}
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/conformar-exclusao.php';
include __DIR__.'/includes/footer.php';