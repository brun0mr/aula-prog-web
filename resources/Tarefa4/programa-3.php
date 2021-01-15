<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>programa-3</title>
    </head>
    <body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Base maior do trapezio: <input type="text" name="fnameA"><br>
        Base menor do trapezio: <input type="text" name="fnameB"><br>
        Altura do trapezio: <input type="text" name="fnameC"><br>
        Area da base da piramide: <input type="text" name="fnameD"><br>
        Altura da piramide: <input type="text" name="fnameE"><br><br>
        <input type="submit">
    </form>


        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $B = $_POST['fnameA'];
            $b = $_POST['fnameB'];
            $h = $_POST['fnameC'];
            $Ab = $_POST['fnameD'];
            $hp = $_POST['fnameE'];

            $x = $B+$b;
            echo "<h1>A area do trapezio e :".($x*$h)/2.0." m^2 </h1>";

            echo "<h1>O volume da piramide e :".$Ab*$hp/3.0." m^3 </h1>";
        }



        
            
        ?>
    </body>
</html>