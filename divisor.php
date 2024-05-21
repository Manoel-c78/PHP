<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="divisor.css">
    <title>Divisor | PHP</title>
</head>
<body>
        
        
    <form action="" method="get">

        <h5>Divisor</h5>


            <label for="numero">Insira um número: </label>
            <input type="number" id="numero" name="numero" step="1" required><br><br>

            <input type="submit" value="Calcular">

    </form>  
    
    <?php

        if(isset($_GET['numero'])) {
            
            $numero = $_GET['numero'];
            
            if ($numero % 10 == 0) {
                echo "O número $numero é divisível por 10.";

            } elseif ($numero % 5 == 0) {
                echo "O número $numero é divisível por 5.";

            } elseif ($numero % 2 == 0) {
                echo "O número $numero é divisível por 2.";

            } else {
                echo "O número $numero não é divisível por 10, 5 ou 2.";

            }
        }
    ?>

</body>

</html>