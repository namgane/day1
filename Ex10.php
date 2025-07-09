<!DOCTYPE html>
<html>
<head><title>Fibonacci Sequence</title></head>
<body>
    <h2>Exercise 10: Fibonacci Sequence</h2>
    <form method="POST">
        <input type="number" name="terms" min="1" placeholder="Enter n terms" required>
        <input type="submit" name="submit10" value="Generate">
    </form>

    <?php
    if (isset($_POST['submit10'])) {
        $n = (int) $_POST['terms'];
        $a = 0;
        $b = 1;
        $fib = [$a, $b];

        for ($i = 2; $i < $n; $i++) {
            $fib[] = $fib[$i-1] + $fib[$i-2];
        }

        echo "Fibonacci sequence up to $n terms:<br>";
        echo implode(', ', array_slice($fib, 0, $n));
    }
    ?>
</body>
</html>
