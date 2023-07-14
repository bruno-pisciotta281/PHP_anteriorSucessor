<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resposta</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $n = $_REQUEST["num"] ?? 0;
                $a = $n - 1;
                $s = $n + 1;
                echo "O número escolhido é:  <strong>$n</strong>";
                echo "<br>O seu antecessor é:  <strong>$a</strong>";
                echo "<br>O seu sucessor é: <strong>$s</strong>"
            ?>
            <br>
         <a href="javascript:history.go(-1)"><button>Voltar</button></a>
        </p>
    </main>
</body>
</html>