<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<form method="post">
        <label for="valor1">Valor: </label>
        <input type="number" name="valor1" id="valor1">
        <br>
        <button type="submit">Enviar</button>
</form>
<body>
    <?php
    if($_POST){
        $valor1 = $_POST["valor1"];

        switch ($valor1){
            case 1:
                echo "Você está na tabuada do: " . $valor1 ;
                echo "<br>";
                for($i = 1; $i <= 10; $i = $i + 1){
                    echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                    echo "<br>";
                }
                break;
            case 2:
                echo "Você está na tabuada do: " . $valor1 ;
                echo "<br>";
                for($i = 1; $i <= 10; $i = $i + 1){
                    echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                    echo "<br>";
                }
                break;
            case 3:
                echo "Você está na tabuada do: " . $valor1 ;
                echo "<br>";
                for($i = 1; $i <= 10; $i = $i + 1){
                    echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                    echo "<br>";
                }
                break;
            case 4:
                echo "Você está na tabuada do: " . $valor1 ;
                echo "<br>";
                for($i = 1; $i <= 10; $i = $i + 1){
                    echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                    echo "<br>";
                }
                break;
            case 5:
                echo "Você está na tabuada do: " . $valor1 ;
                echo "<br>";
                for($i = 1; $i <= 10; $i = $i + 1){
                    echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                    echo "<br>";
                }
                break;
            case 6:
                echo "Você está na tabuada do: " . $valor1 ;
                echo "<br>";
                for($i = 1; $i <= 10; $i = $i + 1){
                    echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                    echo "<br>";
                }
                break;
            case 7:
                echo "Você está na tabuada do: " . $valor1 ;
                echo "<br>";
                for($i = 1; $i <= 10; $i = $i + 1){
                    echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                    echo "<br>";
                }
                break;
            case 8:
                echo "Você está na tabuada do: " . $valor1 ;
                echo "<br>";
                for($i = 1; $i <= 10; $i = $i + 1){
                    echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                    echo "<br>";
                }
                break;
            case 9:
                echo "Você está na tabuada do: " . $valor1 ;
                echo "<br>";
                for($i = 1; $i <= 10; $i = $i + 1){
                    echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                    echo "<br>";
                }
                break;
            case 10:
                echo "Você está na tabuada do: " . $valor1 ;
                echo "<br>";
                for($i = 1; $i <= 10; $i = $i + 1){
                    echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                    echo "<br>";
                }
                break;
            default:
                echo "Somente Tabuada do 1 ao 10";
                break;
        }
    }
    ?>
</body>
</html>