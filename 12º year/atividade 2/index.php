<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #ffffff;
            color: #000000;
        }
        .bloco {
            background-color: #ffe0e7;
            border: 1px solid #f7a9c8;
            padding: 15px;
            margin-bottom: 15px;
            width: 500px;
            margin-left: auto; 
            margin-right: auto;
            text-align: center;
        }
        h3 {
            margin-top: 0;
            background-color: #f7a9c8;
            padding: 5px;
        }
        label {
            display: block;
            margin-top: 8px;
        }
        input[type="text"],
        input[type="date"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 95%;
            padding: 4px;
            margin-top: 2px;
        }
        textarea {
            height: 60px;
        }
        .botoes-radio {
            margin-top: 5px;
        }
    </style>
</head>

<body>

    <form action="resultado.php" method="POST">

        <div class="bloco">
            <h3>DADOS PESSOAIS</h3>
            
            <label>Nome:</label>
            <input type="text" name="nome" required>

            <label>Data de Nascimento:</label>
            <input type="date" name="data_nascimento" required>

            <label>No Cartão de Cidadão:</label>
            <input type="text" name="cc" required>

            <label>No Identificacão Fiscal:</label>
            <input type="text" name="nif" required>

            <label>Genero:</label>
            <div class="botoes-radio">
                <input type="radio" name="genero" value="masculino" checked> Masculino
                <input type="radio" name="genero" value="feminino"> Feminino
                <input type="radio" name="genero" value="outro"> Outro
            </div>
        </div>

        <div class="bloco">
            <h3>DADOS DE CONTACTO</h3>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Telefone:</label>
            <input type="tel" name="telefone" required>

            <label>Morada:</label>
            <input type="text" name="morada" required>

            <label>Código Postal:</label>
            <input type="text" name="codigo_postal" required>

            <label>Localidade:</label>
            <input type="text" name="localidade" required>
        </div>

        <div class="bloco">
            <h3>DADOS ESCOLARES</h3>

            <label>Curso:</label>
            <select name="curso" required>
                <option value="">Escolha uma opcão</option>
                <option value="Tecnico/a de Programacao de Sistemas Informaticos">Tecnico/a de Programacao de Sistemas Informaticos</option>
                <option value="Tecnico/a de Gestao e programacao de Sistemas Informaticos">Tecnico/a de Gestao e programacao de Sistemas Informaticos</option>
                <option value="Tecnico/a de Multimedia">Tecnico/a de Multimedia</option>
                <option value="Tecnico/a de Informatica -- Sistemas">Tecnico/a de Informatica -- Sistemas</option>
                <option value="Outro">Outro</option>
            </select>

            <label>Ano Escolar:</label>
            <select name="ano" required>
                <option value="">Escolha o ano</option>
                <option value="10o Ano">10o Ano</option>
                <option value="11o Ano">11o Ano</option>
                <option value="12o Ano">12o Ano</option>
            </select>

            <label>Escola de Origem:</label>
            <input type="text" name="escola_origem" required>

            <label>Informacão Adicional:</label>
            <textarea name="observacoes"></textarea>

            <br><br>
            <input type="checkbox" name="consentimento" required> Declaro que os dados introduzidos sao verdadeiros
            
            <br><br>
            <input type="submit" value="Enviar Matricula">
        </div>

    </form>

</body>

</html>