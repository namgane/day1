<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check Number</title>
</head>
<body>
    <h1 style="text-align: center;">Check Number</h1>

    <form method="POST">
        <label>Input Number</label><br>
        <input type="number" name="number" required><br><br>
        <input type="submit" name="Click" value="Click"><br><br>
    </form>

    <?php
    if (isset($_POST['Click'])) {
        $n = (int) $_POST['number'];
        if ($n % 2 == 0) {
            echo "The number: $n is <strong>even</strong>";
        } else {
            echo "The number: $n is <strong>odd</strong>";
        }
    }
    ?>
</body>
</html>
