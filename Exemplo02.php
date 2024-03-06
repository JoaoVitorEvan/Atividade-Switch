<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Vendas Online</title>
</head>
<body>
    <h1>Sistema de Vendas Online</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="valor_itens">Valor Total dos Itens:</label>
        <input type="number" id="valor_itens" name="valor_itens" min="0" step="0.01" required><br><br>
        
        <label for="metodo_pagamento">Método de Pagamento:</label>
        <select id="metodo_pagamento" name="metodo_pagamento" required>
            <option value="cartao_credito">Cartão de Crédito</option>
            <option value="boleto">Boleto Bancário</option>
            <option value="transferencia">Transferência Bancária</option>
        </select><br><br>

        <button type="submit">Calcular Valor Final</button>
    </form>

    <?php
    // Função para calcular o valor total com base no método de pagamento e no valor dos itens
    function calcularTotal($metodoPagamento, $valorItens) {
        switch ($metodoPagamento) {
            case 'cartao_credito':
                // Aplicar desconto de 5% para pagamentos com cartão de crédito
                $desconto = $valorItens * 0.05;
                $total = $valorItens - $desconto;
                break;
            case 'boleto':
                // Aplicar desconto de 10 reais para pagamentos com boleto
                $desconto = 10;
                $total = $valorItens - $desconto;
                break;
            case 'transferencia':
                // Aplicar desconto de 3% para pagamentos por transferência bancária
                $desconto = $valorItens * 0.03;
                $total = $valorItens - $desconto;
                break;
            default:
                $total = $valorItens;
                break;
        }
        return $total;
    }

    // Verificar se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar se os campos foram preenchidos
        if (!empty($_POST["valor_itens"]) && isset($_POST["metodo_pagamento"])) {
            // Obter o valor total dos itens e o método de pagamento do formulário
            $valorItens = $_POST["valor_itens"];
            $metodoPagamento = $_POST["metodo_pagamento"];

            // Calcular o valor final da compra com base no método de pagamento escolhido
            $valorFinal = calcularTotal($metodoPagamento, $valorItens);

            // Exibir o valor final da compra
            echo "<p>O valor final da compra é: R$ $valorFinal</p>";
        } else {
            // Se os campos estiverem vazios, exibir uma mensagem de erro
            echo "<p style='color: red;'>Por favor, preencha todos os campos do formulário.</p>";
        }
    }
    ?>
</body>
</html>
