<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Result</h1>
    </header>
    <main>
        <?php  
        $number = $_GET["number"]; 
        $cotacaoDia = 5.200;
        $valorFinal = ($number * $cotacaoDia);
        $trataNumero = number_format($number, 2, ".", "");   
        echo "Voce deseja converter R\$$number,<br>";
        echo "O valor convertido em Euros é de <strong>€ $valorFinal</strong><br>"; 
        echo "A cotação fixa do dia é de <strong>$cotacaoDia</strong><br>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
    
</body>
</html>