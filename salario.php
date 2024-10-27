<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $minimo = 1_380.60;
    $salario = $_GET["sal"] ?? 1380.60;
    ?>
    <main>
        <h1>Salários Minimos </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="" step="0.01">
            <p>Considerando o salário mínimo de R$<strong> <?=number_format($minimo, 2, ",", ".");?></strong></p>
            <input type="submit" value="calcular">
        </form>
</main>

    <section>
        <h2>Salário</h2>
        <?php	
        $tot = intdiv($salario, $minimo);
        $dif = $salario % $minimo;
        echo "<p>Quem recebe um salário de R\$".  number_format($salario, 2, ",", ".").", ganha $tot salárioos mínimos + R\$". number_format($dif, 2, ",", ".").".</p>";
        ?>
    </section>
    
</body>
</html>