<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title >Tính tuổi </title>
</head>
<body>
    <h2 class="text-center">Nhập năm sinh để tính tuổi</h2>
    <form method="post">
        <label for="year">Năm sinh:</label>
        <input type="number" name="year" id="year">
        <input type="submit" name="btnCalc" value="Tính tuổi" class="btn btn-primary">
    </form>

<?php
if (isset($_POST['btnCalc'])) {
    $myYear = $_POST['year'];
    $currentYear = date('Y');
    $myAge = $currentYear - $myYear;

    if ($myAge >= 0 && $myAge <= 150) {
        echo "<p>Tuổi của bạn là: <strong>$myAge</strong> tuổi.</p>";
    }
}
?>
</body>
</html>
