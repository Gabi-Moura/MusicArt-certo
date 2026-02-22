<h2>Produtos</h2>
<a href="index.php?controller=produto&acao_p=criar_p">Novo Produto</a>
<ul>
<?php foreach($produtos as $p): ?>
    <li>
        <?= $p['nome'] ?> - <?= $p['preco']?>
        <a href="index.php?controller_p=produtos&acao_p=editar_p&id=<?= $p['id_produtos'] ?>">Editar </a> |  
        <a href="index.php?controller_p=produtos&acao_p=excluir_p&id=<?= $p['id_produtos'] ?>">Excluir </a>
      
    </li>
<?php endforeach; ?>
</ul>
