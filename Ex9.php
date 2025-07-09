<!DOCTYPE html>
<html>
<head><title>Palindrome Check</title></head>
<body>
    <h2>Exercise 9: Palindrome Number</h2>
    <form method="POST">
        <input type="number" name="number9" placeholder="Enter a number" required>
        <input type="submit" name="submit9" value="Check">
    </form>

    <?php
    if (isset($_POST['submit9'])) {
        $n = $_POST['number9'];
        $rev = strrev((string)$n);
        if ((string)$n === $rev) {
            echo "$n is a <strong>Palindrome</strong>";
        } else {
            echo "$n is <strong>Not a Palindrome</strong>";
        }
    }
    ?>
</body>
</html>
