<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações do Modo</title>
</head>
<body>
    <h1>Configurações do Modo</h1>

    <?php
    // Inicia ou retoma a sessão
    session_start();

    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se o modo foi alterado e atualiza a configuração
        if (isset($_POST["modo"])) {
            $modo = $_POST["modo"];
            // Salva o modo selecionado nas configurações do usuário
            $_SESSION["modo"] = $modo;
        }
    }

    // Verifica o modo atual, se não estiver definido, assume o modo padrão
    $modo = isset($_SESSION["modo"]) ? $_SESSION["modo"] : "seguranca";

    // Aqui você pode definir diferentes comportamentos com base no modo
    switch ($modo) {
        case "seguranca":
            // Configurações de segurança
            $mensagem = "Modo de segurança ativado. Acesso restrito.";
            break;
        case "desenvolvimento":
            // Configurações de desenvolvimento
            $mensagem = "Modo de desenvolvimento ativado. Mensagens de depuração exibidas.";
            break;
        default:
            // Configurações padrão
            $mensagem = "Modo desconhecido.";
            break;
    }
    ?>

    <p><?php echo $mensagem; ?></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="modo">Selecione o modo:</label>
        <select name="modo" id="modo">
            <option value="seguranca" <?php if ($modo == "seguranca") echo "selected"; ?>>Modo de Segurança</option>
            <option value="desenvolvimento" <?php if ($modo == "desenvolvimento") echo "selected"; ?>>Modo de Desenvolvimento</option>
        </select>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
