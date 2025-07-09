<!DOCTYPE html>
<html>
<head>
    <title>Check Prime Number</title>
</head>
<body>
    <h2>Exercise 4: Check Prime Number</h2>
    <form method="POST">
        <label>Enter a number:</label>
        <input type="number" name="number" min="0" required>
        <input type="submit" name="check" value="Check Prime">
    </form>

    <br>

    <?php
    if (isset($_POST['check'])) {
        $n = (int) $_POST['number'];
        $isPrime = true;

        if ($n <= 1) {
            $isPrime = false;
        } else {
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }

        if ($isPrime) {
            echo "<strong>$n is a Prime number</strong>";
        } else {
            echo "<strong>$n is Not a Prime number</strong>";
        }
    }
    ?>
</body>
</html>
