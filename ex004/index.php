<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivs PHP</title>
</head>

<body>
    <h1>Teste de Tipos Primitivos</h1>

    <?php
    // 0x = Hexadecimal
    $numHex = 0x1A;
    echo "<p>O valor da variável é $numHex</p>";
    var_dump($numHex);

    // Ob = Binário
    $numBi = 0b1001;
    echo "<p>O valor da variável é $numBi</p>";
    var_dump($numBi);

    // 0 = Octal
    $numOct = 010;
    echo "<p>O valor da variável é $numOct</p>";
    var_dump($numOct);

    // potencias são consideradas como float
    $numPot = 3e2;
    echo "<p>O valor da variável é $numPot</p>";
    var_dump($numPot);


    // Coerção - Forçar uma tipagem a uma variavel ou constante
    
    $numCoe = (int) "950";
    echo "<p>O valor da variável é $numCoe</p>";
    var_dump($numCoe);


    // Bool ou Booleans
    
    $ehCasado = false;
    // O echo/print de uma variável bool false retornará vazio
    print "<p>O valor para casado é $ehCasado</p>";
    var_dump($ehCasado);

    $ehCasado = true;
    // O echo/print de uma variável bool true retornará 1
    print "<p>O valor novo de casado é $ehCasado</p>";
    var_dump($ehCasado);

    ?>
</body>

</html>