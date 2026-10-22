<link rel="stylesheet" href="avaliacao.css">
<?php

$produtos = [
    "Pão" => 0.50,
    "Leite" => 0.90,
    "Queijo" => 2.50,
    "Sumo" => 1.20
];

function calcularTotal($preco, $quantidade) {
    return $preco * $quantidade;
}

function mostrarResumo($produto, $quantidade, $total) {
    echo "<h2>Resumo da Encomenda</h2>";
    echo "<h3>Produto: $produto </h3>";
    echo "<h3>Quantidade: $quantidade</h3>";
    echo "<h3>Total: € </h3>" . number_format($total, 2);
}

if (isset($_POST['produto']) && isset($_POST['quantidade'])) {
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];

    if ($quantidade <= 0) {
        echo "Quantidade inválida!";
    } else {
        // buscar preço 
        $preco = $produtos[$produto];
        $total = calcularTotal($preco, $quantidade);
        mostrarResumo($produto, $quantidade, $total);
    }
} else {
    echo "Erro no envio do formulário!";
}

?>