<h2>Editar Produto</h2>
<!-- Variável enviada por GET, pois o atualizar vai ser enviado pela URL -->

<form method="post" action="index.php?controller=produtos&acao_p=atualizar_p">
    <input type="hidden" name="id" value="<?=$produto['id_produtos']?>">

    Nome: <input name="nome"   value="<?=$produto['nome']?>"><br><br>
    Preço: <input name="preco" value="<?=$produto['preco']?>"><br><br>

    <button>Atualizar</button>
 
</form>

