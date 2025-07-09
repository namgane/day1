<!DOCTYPE html>
<html>
<head><title>Reverse String</title></head>
<body>
    <h2>Exercise 7: Reverse a String</h2>
    <form method="POST">
        <input type="text" name="text7" placeholder="Enter string" required>
        <input type="submit" name="submit7" value="Reverse">
    </form>

    <?php
    if (isset($_POST['submit7'])) {
        $input = $_POST['text7'];
        $reversed = strrev($input);
        echo "Original: $input <br>Reversed: <strong>$reversed</strong>";
    }
    ?>
</body>
</html>
