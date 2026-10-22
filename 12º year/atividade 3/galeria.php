<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    include "header.php";
    ?>
    <main>
        <div class="galeria-header">
            <h1>Minha Galeria</h1>
        </div>
        <div class="galeria-container">
            <div class="card-doce">
                <img src="img/brigadeiro.jpeg" alt="Brigadeiro">
                <h2>Brigadeiro</h2>
            </div>
            <div class="card-doce">
                <img src="img/brownie.webp" alt="Brownie">
                <h2>Brownie</h2>
            </div>
            <div class="card-doce">
                <img src="img/doce.jpeg" alt="Doce de copo">
                <h2>Doce de copo</h2>
            </div>
            <div class="card-doce">
                <img src="img/doceamendoim.jpg" alt="Doce de Amendoim">
                <h2>Doce de Amendoim</h2>
            </div>
            <div class="card-doce">
                <img src="img/docefigo.jpg" alt="Doce de Figo">
                <h2>Doce de Figo</h2>
            </div>
        </div>
    </main>
    <?php 
    include "footer.php";
    ?>
</body>

</html>