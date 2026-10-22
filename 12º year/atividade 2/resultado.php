<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title><?php echo empty($erros) ? "Matricula Submetida" : "Erro na Submissao"; ?></title>
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
        .linha {
            margin-bottom: 8px;
        }
        .rotulo {
            font-weight: bold;
        }
        .erro {
            color: red;
            margin-left: auto; 
            margin-right: auto;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        header("Location: index.php");
        exit();
    }

    $erros = [];

    function sanitizar($dado) {
        return htmlspecialchars(trim($dado ?? ''), ENT_QUOTES, 'UTF-8');
    }

    $nome            = sanitizar($_POST['nome'] ?? '');
    $data_nascimento = sanitizar($_POST['data_nascimento'] ?? '');
    $cc              = sanitizar($_POST['cc'] ?? '');
    $nif             = sanitizar($_POST['nif'] ?? '');
    $genero          = sanitizar($_POST['genero'] ?? '');
    $email           = sanitizar($_POST['email'] ?? '');
    $telefone        = sanitizar($_POST['telefone'] ?? '');
    $morada          = sanitizar($_POST['morada'] ?? '');
    $codigo_postal   = sanitizar($_POST['codigo_postal'] ?? '');
    $localidade      = sanitizar($_POST['localidade'] ?? '');
    $curso           = sanitizar($_POST['curso'] ?? '');
    $ano             = sanitizar($_POST['ano'] ?? '');
    $escola_origem   = sanitizar($_POST['escola_origem'] ?? '');
    $observacoes     = sanitizar($_POST['observacoes'] ?? '');
    $consentimento   = isset($_POST['consentimento']);

    if (empty($nome))            $erros[] = "O nome e obrigatorio.";
    if (empty($data_nascimento)) $erros[] = "A data de nascimento e obrigatoria.";
    if (empty($cc))              $erros[] = "O Cartao de Cidadao e obrigatorio.";
    if (empty($genero))          $erros[] = "A selecao do genero e obrigatoria.";
    if (empty($telefone))        $erros[] = "O telefone e obrigatorio.";
    if (empty($morada))          $erros[] = "A morada e obrigatoria.";
    if (empty($localidade))      $erros[] = "A localidade e obrigatoria.";
    if (empty($curso))           $erros[] = "A selecao do curso e obrigatoria.";
    if (empty($ano))             $erros[] = "A selecao do ano e obrigatoria.";
    if (empty($escola_origem))   $erros[] = "A escola de origem e obrigatoria.";
    if (!$consentimento)         $erros[] = "Devera aceitar a declaracao de veracidade dos dados.";

    if (empty($email)) {
        $erros[] = "O email e obrigatorio.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "O endereco de email introduzido nao e valido.";
    }

    if (empty($nif)) {
        $erros[] = "O NIF e obrigatorio.";
    } elseif (!preg_match('/^[0-9]{9}$/', $nif)) {
        $erros[] = "O NIF deve ser constituido por 9 algarismos.";
    }

    if (empty($codigo_postal)) {
        $erros[] = "O codigo postal e obrigatorio.";
    } elseif (!preg_match('/^[0-9]{4}-[0-9]{3}$/', $codigo_postal)) {
        $erros[] = "O codigo postal nao esta no formato correto (ex: 7800-123).";
    }

    if (!empty($data_nascimento)) {
        try {
            $nasc = new DateTime($data_nascimento);
            $hoje = new DateTime();
            $idade = $hoje->diff($nasc)->y;

            if ($idade < 14) {
                $erros[] = "O aluno devera ter pelo menos 14 anos.";
            }
        } catch (Exception $e) {
            $erros[] = "A data de nascimento introduzida e invalida.";
        }
    }
    ?>

    <?php if (!empty($erros)): ?>
        <div class="bloco">
            <h3>Não foi possivel efetuar a matricula</h3>
            <p>Foram encontrados os seguintes erros:</p>
            <ul>
                <?php foreach ($erros as $erro): ?>
                    <li class="erro"><?php echo $erro; ?></li>
                <?php endforeach; ?>
            </ul>
            <br>
            <a href="javascript:history.back()">Voltar ao formulário</a>
        </div>

    <?php else: ?>
        <div class="bloco">
            <h3>Matricula submetida com sucesso</h3>
        </div>

        <div class="bloco">
            <h3>DADOS PESSOAIS</h3>
            <div class="linha"><span class="rotulo">Nome:</span> <?php echo $nome; ?></div>
            <div class="linha"><span class="rotulo">Data de Nascimento:</span> <?php echo date('d/m/Y', strtotime($data_nascimento)); ?></div>
            <div class="linha"><span class="rotulo">Cartao de Cidadão:</span> <?php echo $cc; ?></div>
            <div class="linha"><span class="rotulo">NIF:</span> <?php echo $nif; ?></div>
            <div class="linha"><span class="rotulo">Genero:</span> <?php echo $genero; ?></div>
        </div>

        <div class="bloco">
            <h3>DADOS DE CONTACTO</h3>
            <div class="linha"><span class="rotulo">Email:</span> <?php echo $email; ?></div>
            <div class="linha"><span class="rotulo">Telefone:</span> <?php echo $telefone; ?></div>
            <div class="linha"><span class="rotulo">Morada:</span> <?php echo $morada; ?></div>
            <div class="linha"><span class="rotulo">Código Postal:</span> <?php echo $codigo_postal; ?></div>
            <div class="linha"><span class="rotulo">Localidade:</span> <?php echo $localidade; ?></div>
        </div>

        <div class="bloco">
            <h3>DADOS ESCOLARES</h3>
            <div class="linha"><span class="rotulo">Curso:</span> <?php echo $curso; ?></div>
            <div class="linha"><span class="rotulo">Ano de Escolaridade:</span> <?php echo $ano; ?></div>
            <div class="linha"><span class="rotulo">Escola de Origem:</span> <?php echo $escola_origem; ?></div>
            <?php if (!empty($observacoes)): ?>
                <div class="linha"><span class="rotulo">Informacão Adicional:</span><br><?php echo nl2br($observacoes); ?></div>
            <?php endif; ?>
        </div>

        <br>
        <a href="index.php">Voltar ao formulario</a>
    <?php endif; ?>

</body>

</html>