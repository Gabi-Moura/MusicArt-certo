<?php
require_once 'controllers/UsuarioController.php';
require_once 'controllers/ProdutosController.php';
$controller = new UsuarioController();
$acao = isset($_GET['acao']) ? $_GET['acao'] : 'listar';
if($acao == 'listar'){
$controller->listar();
}
if($acao == 'criar'){
$controller->criar();
}
if($acao == 'salvar'){
$controller->salvar($_POST['nome'], $_POST['email']);
}
if($acao == 'editar'){
$controller->editar($_GET['id']);
}
if($acao == 'atualizar'){
$controller->atualizar($_POST['id'], $_POST['nome'], $_POST['email']);
}
if($acao == 'excluir'){
$controller->excluir($_GET['id']);
}

$controller_p = new ProdutosController();
$acao = isset($_GET['acao_p']) ? $_GET['acao_p'] : 'listar_p';
if($acao == 'listar_p'){
    $controller_p->listar_p();
}
if($acao == 'criar_p'){
    $controller_p->criar_p();
}
if($acao == 'salvar_p'){
    $controller_p->salvar_p($_POST['nome'],$_POST['preco']);
}
if($acao == 'editar_p'){
    $controller_p->editar_p($_GET['id']);
}
if($acao == 'atualizar_p'){
    $controller_p->atualizar_p($_POST['id'],$_POST['nome'],$_POST['preco']);
}
if($acao == 'excluir_p'){
    $controller_p->excluir_p($_GET['id']);
}
