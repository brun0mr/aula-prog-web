<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>programa-1</title>
    </head>
    <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Litros: <input type="text" name="fnameA">
        Kilometros: <input type="text" name="fnameB">
        <input type="submit">
    </form>


        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $litros= $_POST['fnameA'];
            $km= $_POST['fnameB'];
        }
            echo "<h1>O consumo medio foi de :".$km/$litros." Km/L</h1>"
        ?>
    </body>
</html>