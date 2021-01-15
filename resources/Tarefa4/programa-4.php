<!DOCTYPE html>
<html lang="pt">

<head>
    <title>programa-4</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        LadoA: <input type="text" name="fnameA"><br>
        LadoB: <input type="text" name="fnameB"><br>
        LadoC: <input type="text" name="fnameC"><br><br>
        <input type="submit">
    </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ladoA = $_POST['fnameA'];
    $ladoB = $_POST['fnameB'];
    $ladoC = $_POST['fnameC'];
    
        if ($ladoC == $ladoA && $ladoA == $ladoB) {
            echo "<h1>tipo : Equilatero</h1>";
        } else if ($ladoC != $ladoB && $ladoC != $ladoA && $ladoB != $ladoA) {
            echo "<h1>tipo : escaleno</h1>";
        } else {
            echo "<h1>tipo : Isosceles</h1>";
        }
      
    }

    
    ?>
</body>

</html>