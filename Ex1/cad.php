<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Result</h1>
    </header>
    <main>
        <?php 
           $name = $_GET["name"] ?? "Nenhum nome inserido";
           $surname = $_GET["surname"] ?? "Nenhum sobrenome inserido";
           print "<p>Your name and surname is,  $name  $surname! </p>";
           print 50/2+3**2;
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
    
</body>
</html>