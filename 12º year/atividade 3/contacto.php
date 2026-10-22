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
        <div class="contato-localizacao-container">
            <form action="resultado.php" method="POST" class="bloco-form">
                <div class="bloco">
                    <h1>Formulário de Contato</h1><br>
                    <label>Insira seu Nome:</label><br>
                    <input type="text" name="nome" required><br><br>

                    <label>Insira seu Email:</label><br>
                    <input type="email" name="email" required><br><br>

                    <label>Insira sua Mensagem:</label><br>
                    <textarea name="msg" id=""></textarea>
                </div>
                <br>
                <input type="submit" value="Enviar">
            </form>
            <div class="main-header">
                <h1>Localização</h1><br>
                <h2>Gabriel Pereira, évora</h2> <br><br>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3119.2264449504332!2d-7.902148300000001!3d38.5746329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19e4c2800ee1b9%3A0x5fac047644a5c72b!2sEscola%20Secund%C3%A1ria%20Gabriel%20Pereira!5e0!3m2!1spt-PT!2spt!4v1792057613321!5m2!1spt-PT!2spt"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>
        </div>
    </main>
    <?php 
    include "footer.php";
    ?>
</body>

</html>