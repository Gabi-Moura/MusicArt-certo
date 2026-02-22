<h2>Usuários</h2>

<a href="index.php?controller=usuario&acao=criar">Novo Usuário</a>

<ul>
<?php foreach($usuarios as $u): ?>
    <li>
        <?= $u['nome'] ?> - <?= $u['email']?>
        <a href="index.php?controller=usuario&acao=editar&id=<?= $u['id'] ?>">Editar </a> |
        <a href="index.php?controller=usuario&acao=excluir&id=<?= $u['id'] ?>">Excluir </a>
    </li>
<?php endforeach; ?>
</ul>
