<!DOCTYPE html>
<html>
<head><title>Triangle Perimeter</title></head>
<body>
    <h2>Exercise 6: Triangle Perimeter</h2>
    <form method="POST">
        <input type="number" name="a" placeholder="Side a" required>
        <input type="number" name="b" placeholder="Side b" required>
        <input type="number" name="c" placeholder="Side c" required>
        <input type="submit" name="submit6" value="Calculate Perimeter">
    </form>

    <?php
    if (isset($_POST['submit6'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $perimeter = $a + $b + $c;
        echo "Perimeter = $a + $b + $c = <strong>$perimeter</strong>";
    }
    ?>
</body>
</html>
