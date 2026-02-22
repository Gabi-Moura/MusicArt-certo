<h2>Editar Usuário</h2>
<!-- Variável enviada por GET, pois o atualizar vai ser enviado pela URL -->
<form method="post" action="index.php?controller=usuario&acao=atualizar">
    <input type="hidden" name="id" value="<?=$usuario['id']?>">

    Nome: <input name="nome" value="<?=$usuario['nome']?>"><br><br>
    Email: <input name="email" value="<?=$usuario['email']?>"><br><br>

    <button>Atualizar</button>
</form>
