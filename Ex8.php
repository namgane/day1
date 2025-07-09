<!DOCTYPE html>
<html>
<head><title>Circle Area</title></head>
<body>
    <h2>Exercise 8: Area of a Circle</h2>
    <form method="POST">
        <input type="number" name="radius" step="0.01" placeholder="Radius" required>
        <input type="submit" name="submit8" value="Calculate Area">
    </form>

    <?php
    if (isset($_POST['submit8'])) {
        $r = (float) $_POST['radius'];
        $area = pi() * $r * $r;
        echo "Area = π * r*r = " . round($area, 2) . "";
    }
    ?>
</body>
</html>
