<!DOCTYPE html>
<html lang="pt">

<head>
    <title>programa-5</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Entre com quantos numeros quer ver: <input type="text" name="fnameA"><br><br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['fnameA'];


    function fibonacci($n, $first = 0, $second = 1)
    {
        $fib = [$first, $second];
        for ($i = 1; $i < $n; $i++) {
            $fib[] = $fib[$i] + $fib[$i - 1];
        }
        return $fib;
    }
    echo "<pre>";
    print_r(fibonacci($num));
    }

    ?>
</body>

</html>