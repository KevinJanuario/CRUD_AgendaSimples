<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Contatos;

define('TITTLE','Editar contato');
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
if(isset($_POST['nome'],$_POST['numero'],$_POST['ddd'],$_POST['tipo'])){
    $obContatos = new Contatos;
    $obContatos -> nome     = $_POST['nome'];
    $obContatos -> numero   = $_POST['numero'];
    $obContatos -> ddd      = $_POST['ddd'];
    $obContatos -> tipo     = $_POST['tipo'];
    $obContatos -> atualizar();

    header('location: index.php?status=success');
    exit;
}
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';