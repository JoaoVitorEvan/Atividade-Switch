<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação de Filme</title>
</head>
<body>
    <h1>Avaliação de Filme</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="avaliacao">Avalie o filme (1 a 5):</label>
        <input type="number" id="avaliacao" name="avaliacao" min="1" max="5" required>
        <button type="submit">Enviar Avaliação</button>
    </form>

    <?php
    // Função para obter a classificação com base na avaliação do usuário
    function obterClassificacao($avaliacao) {
        // Arredondar a avaliação para o número inteiro mais próximo
        $avaliacao = round($avaliacao);

        // Usar a tag switch para determinar a classificação com base na avaliação
        switch ($avaliacao) {
            case 1:
                $classificacao = "Péssimo";
                break;
            case 2:
                $classificacao = "Ruim";
                break;
            case 3:
                $classificacao = "Regular";
                break;
            case 4:
                $classificacao = "Bom";
                break;
            case 5:
                $classificacao = "Ótimo";
                break;
            default:
                $classificacao = "Avaliação inválida";
                break;
        }

        return $classificacao;
    }

    // Verificar se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar se o campo de avaliação foi preenchido
        if (!empty($_POST["avaliacao"])) {
            // Obter a avaliação submetida pelo formulário
            $avaliacao = $_POST["avaliacao"];

            // Obter a classificação do filme com base na avaliação
            $classificacaoFilme = obterClassificacao($avaliacao);

            // Exibir a classificação do filme
            echo "<p>Sua avaliação: $avaliacao estrelas ($classificacaoFilme)</p>";
        } else {
            // Se o campo estiver vazio, exibir uma mensagem de erro
            echo "<p style='color: red;'>Por favor, insira sua avaliação (1 a 5 estrelas).</p>";
        }
    }
    ?>
</body>
</html>
