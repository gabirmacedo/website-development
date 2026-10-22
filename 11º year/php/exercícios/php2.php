<?php
// exercicio a
for ($i = 1; $i <= 20; $i++) {

    if ($i % 2 == 0) {
        echo "O número $i é Par.<br>";
    } else {
        echo "O número $i é Ímpar.<br>";
    }

}
echo "<br>";

// exercicio b
for ($i = 30; $i >= 1; $i--) {

    if ($i % 5 == 0) {
        continue;
    }

    echo "Valor: $i<br>";
}
echo "<br>";

// exercicio c
$numero = 7;

for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "<br>";
}
?>