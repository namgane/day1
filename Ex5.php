<!DOCTYPE html>
<html>
<head><title>Count Vowels</title></head>
<body>
    <h2>Exercise 5: Count Vowels</h2>
    <form method="POST">
        <label>Enter a string:</label><br>
        <input type="text" name="text5" required>
        <input type="submit" name="submit5" value="Count Vowels">
    </form>

    <?php
    if (isset($_POST['submit5'])) {
        $str = strtolower($_POST['text5']);
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if (in_array($str[$i], $vowels)) {
                $count++;
            }
        }
        echo "Number of vowels in '$str': <strong>$count</strong>";
    }
    ?>
</body>
</html>
