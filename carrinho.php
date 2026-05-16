<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
</head>

<body>
    <form action="carrinho.php" method="post">
        <input type="text" name="sabor" placeholder="Sabor da Pizza"><br>
        <input type="number" name="quantidade" value="1" min="1"><br>
        <input type="number" name="preco" step="0.01"><br>
        <button type="submit">Fazer pedido</button>
    </form>

    <!-- PHP - pedido php - captura e processa-->
    <?php
    //1. entrada - captura os campos pelo name"" do html
    $sabor = $_POST['sabor'];
    $quantidade = (int) $_POST['quantidade'];
    $preco = (float) $_POST['preco'];

    //2. processamento 
    $total = $preco * $quantidade;
    $totalFmt = number_format($total, 2, ',', '.');

    //3. saida
    echo "<h2>Pedido recebido</h2>";
    echo "Sabor: $sabor<br>";
    echo "Quantidade: $quantidade<br>";
    echo "Total a pagar: <strong>$totalFmt</strong>";

    //verificaçao segura antes de processar
    if (isset($_POST['sabor']) && $_POST['sabor'] !== '') {
        $sabor = htmlspecialchars(strip_tags($_POST['sabor']));
    } else {
        $sabor = "nao infomado";
    }
    ?>
</body>

</html>