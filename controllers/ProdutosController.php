<?php
require_once __DIR__. '/../models/Produto.php';

class ProdutosController {
    private $model;
    public function __construct(){
        $this->model = new Produto();
    }
    public function listar_p(){
        $produtos = $this->model->listar_p();
        include 'views/produtos/produto_listar.php';
    }
    public function criar_p(){
        include 'views/produtos/produto_criar.php';
    }
    public function salvar_p($nome,$preco){
        $preco = str_replace(',', '.', $preco);
        $this->model->criar_p($nome,$preco);
        header("Location:index.php");
    }
    public function editar_p($id){
        $produto = $this->model->buscar_p($id);
        include 'views/produtos/produto_editar.php';
    }
    public function atualizar_p($id,$nome,$preco){
        $preco = str_replace(',', '.', $preco);
        $this->model->atualizar_p($id,$nome,$preco);
        header("Location: index.php");
    }
    public function excluir_p($id) {
        $this->model->excluir_p($id);
        header("Location: index.php");
    }
}