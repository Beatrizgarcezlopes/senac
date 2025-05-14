<html>
<head>
<title>Pizzaria</title>
<?php

// Inicializa variáveis

$nome = "";

$fone = "";

$endereco = "";

$sabor = "";

$tamanho = "";

$bebida = "";

$resultado = "";

// Constantes de preço

$valor_pizza = 45.00;

$valor_bebida = 5.99;

$taxa_entrega = 15.00;

// Verifica se o formulário foi enviado

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];

    $fone = $_POST['fone'];

    $endereco = $_POST['endereco'];

    $sabor = $_POST['sabor'];

    $tamanho = strtoupper($_POST['tamanho']);

    $bebida = $_POST['bebida'];

    // Cálculo do valor total

    $total = $valor_pizza + $valor_bebida + $taxa_entrega;

    // Exibe os dados

    $resultado = "<h2>Resumo do Pedido</h2>";

    $resultado .= "Cliente: " . htmlspecialchars($nome) . "<br>";

    $resultado .= "Telefone: " . htmlspecialchars($fone) . "<br>";

    $resultado .= "Endereço: " . htmlspecialchars($endereco) . "<br><br>";

    $resultado .= "Pizza: " . htmlspecialchars($sabor) . " - Tamanho: " . $tamanho . "<br>";

    $resultado .= "Bebida: " . htmlspecialchars($bebida) . "<br><br>";

    $resultado .= "Valor da Pizza: R$ " . number_format($valor_pizza, 2, ',', '.') . "<br>";

    $resultado .= "Bebida: R$ " . number_format($valor_bebida, 2, ',', '.') . "<br>";

    $resultado .= "Taxa de Entrega: R$ " . number_format($taxa_entrega, 2, ',', '.') . "<br>";

    $resultado .= "<strong>Total a Pagar: R$ " . number_format($total, 2, ',', '.') . "</strong><br>";

}

?>
<!DOCTYPE html>
<html>
<head>
<title>Pedido de Pizza - Mamma</title>
</head>
<body>
<h1>Pizzaria da Mamma</h1>
<h3>Faça seu pedido:</h3>
<form method="post" action="">

        Nome do Cliente: <input type="text" name="nome" required><br><br>

        Telefone: <input type="text" name="fone" required><br><br>

        Endereço: <input type="text" name="endereco" required><br><br>

        Sabor da Pizza: <input type="text" name="sabor" required><br><br>

        Tamanho da Pizza (P, M ou G): <input type="text" name="tamanho" required><br><br>

        Bebida: <input type="text" name="bebida" required><br><br>
<input type="submit" value="Enviar Pedido">
</form>
<?php

    if ($resultado) {

        echo "<hr>" . $resultado;

    }

    ?>
</body>
</html>
 