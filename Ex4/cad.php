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
            $cotacaoDia = 5.20;
            $valorFinal = ($number / $cotacaoDia);
            
            // Criar um objeto NumberFormatter
            $fmt = numfmt_create("pt_PT", NumberFormatter::CURRENCY);
            
            echo "Você deseja converter o valor de " . numfmt_format_currency($fmt, $number, "BRL");
            echo "<br> Fica em Euros o valor de é de <strong> " . numfmt_format_currency($fmt, $valorFinal, "EUR") . "</strong><br>"; 
            echo "A cotação fixa do dia é de <strong>" . numfmt_format_currency($fmt, $cotacaoDia, "BRL" ) . "</strong><br>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>   
</body>
</html>