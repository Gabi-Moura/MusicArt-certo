<?php
require_once __DIR__ . '/../app/config/conexao.php';

class Produto{
    public function listar_p(){
        global $pdo;
        return $pdo->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function criar_p($nome, $preco){
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO produtos (nome,preco) VALUES (?,?)");
        return $stmt ->execute([$nome, $preco]);
    }
    public function buscar_p($id){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM produtos WHERE id_produtos=?");
        $stmt->execute([$id]);
        return $stmt-> fetch(PDO::FETCH_ASSOC);
    }
    public function atualizar_p($id,$nome,$preco){
        global $pdo;
        $stmt = $pdo->prepare("UPDATE produtos SET nome=?, preco=? WHERE id_produtos=?");
        return $stmt->execute([$nome, $preco, $id]);
    }
    public function excluir_p($id){
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM produtos WHERE id_produtos=?");
        return $stmt->execute([$id]);
    }
}