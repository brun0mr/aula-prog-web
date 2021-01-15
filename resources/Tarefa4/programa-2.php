<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>programa-2</title>
    </head>
    <body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Largura: <input type="text" name="fnameA"><br>
        Altura: <input type="text" name="fnameB"><br><br>
        <input type="submit">
    </form>


        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $largura = $_POST['fnameA'];
            $altura = $_POST['fnameB'];
        }
        
            echo "<h1>O numero maximo de alunos e de :".($largura*$altura)/2.25."</h1>";
        ?>
    </body>
</html>