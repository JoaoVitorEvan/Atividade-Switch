<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Status de Pedido</title>
</head>
<body>
    <h1>Verificação de Status de Pedido</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="codigo_pedido">Código do Pedido:</label>
        <input type="text" id="codigo_pedido" name="codigo_pedido" required>
        <button type="submit">Verificar Status</button>
    </form>

    <?php
    // Função para obter o status do pedido com base no código do pedido
    function obterStatusPedido($codigoPedido) {
        // Usar a tag switch para determinar o status do pedido com base no código
        switch ($codigoPedido) {
            case '123':
                $status = "Pedido recebido";
                break;
            case '456':
                $status = "Pedido em processamento";
                break;
            case '789':
                $status = "Pedido enviado";
                break;
            default:
                $status = "Código de pedido inválido";
                break;
        }

        return $status;
    }

    // Verificar se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar se o campo de código do pedido foi preenchido
        if (!empty($_POST["codigo_pedido"])) {
            // Obter o código do pedido submetido pelo formulário
            $codigoPedido = $_POST["codigo_pedido"];

            // Obter status do pedido com base no código do pedido
            $statusPedido = obterStatusPedido($codigoPedido);

            // Exibir o status do pedido
            echo "<p>Status do pedido para o código $codigoPedido: $statusPedido</p>";
        } else {
            // Se o campo estiver vazio, exibir uma mensagem de erro
            echo "<p style='color: red;'>Por favor, insira o código do pedido.</p>";
        }
    }
    ?>
</body>
</html>
