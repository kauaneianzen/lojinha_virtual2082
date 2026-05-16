<?php
require 'config.php';

//buscar produtos no banco de dados
$stmt = $pdo->query("SELECT * FROM produtos ORDER BY criado_em DESC");
$produtos = $stmt->fetchAll();

//logica simples p adic no carrinho
if (isset($_GET['adicionar'])) {
    $id_produto =
        (int)$_GET['adicionar'];
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrihno'] = [];
    }
}

//add o id no carrinho
$_SESSION

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Minha loja php</h1>
    </header>
    <nav>
        <a href="index.php">Início</a>
        <a href="carrinho.php">Carrinho (<?php echo isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0; ?></a>
        <?php if (isset($_SESSION['usuario_id'])): ?>
            <a href="cadastro_produto.php">Cadastrar produto</a>
            <a href="logou.php">Sair (<?php echo $_SESSION['usuario_nome']; ?>)</a>
        <?php else: ?>
            <a href="login.php">Login</a>
        <?php endif; ?>
    </nav>
</body>

</html>