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
        $number = mt_rand(0, 100);
        echo "<p>Gerando um número aleatório em 0 e 100...</p><br>O valor gerado foi <strong>$number</strong>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1f504; Gerar outro número</button>
    </main>
    
</body>
</html>