<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Factorial Calculator</title>
</head>
<body>
    <h2>Factorial Calculator</h2>

    <form method="POST">
        <label>Enter a non-negative integer:</label><br>
        <input type="number" name="number" min="0" required>
        <br><br>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <br>

    <?php
    if (isset($_POST['calculate'])) {
        $n = (int) $_POST['number'];
        $factorial = 1;

        if ($n === 0 || $n === 1) {
            $factorial = 1;
        } else {
            for ($i = 2; $i <= $n; $i++) {
                $factorial *= $i;
            }
        }

        echo "<p>Factorial of $n is: <strong>$factorial</strong></p>";
    }
    ?>
</body>
</html>
