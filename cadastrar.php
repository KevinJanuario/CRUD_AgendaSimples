<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Contatos;

define('TITTLE','Cadstrar contato');

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['numero'],$_POST['ddd'],$_POST['tipo'])){
    $obContatos = new Contatos;
    $obContatos -> nome     = $_POST['nome'];
    $obContatos -> numero   = $_POST['numero'];
    $obContatos -> ddd      = $_POST['ddd'];
    $obContatos -> tipo     = $_POST['tipo'];
    $obContatos -> cadastrar();

    header('location: index.php?status=success');
    exit;
}
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';