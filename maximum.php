<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title >Max</title>
</head>
<body>
    <h2 class="text-center">Nhập số</h2>
    <form action="" method="post" >
        <label for="Number">Number:</label>
        <input type="text" name="Number" id="Number" placeholder="VD: 2, 9, 4">
        <input type="submit" name="btnSubmit" value="Find" class="btn btn-primary mt-2">
    </form>

<?php
// if (isset($_POST['btnNumber'])) {
//     $input = $_POST['Number'];
//     $parts = explode(',', $input);

//     $firstNumber   = (float)trim($parts[0] ?? 0); 
//     $secondNumber  = (float)trim($parts[1] ?? 0); 
//     $thirdNumber   = (float)trim($parts[2] ?? 0); 

//     $max = $firstNumber;

//     if ($max < $secondNumber) { 
//         $max = $secondNumber; 
//     }  
//     if ($max < $thirdNumber) { 
//         $max = $thirdNumber; 
//     } 

//     echo "<p class='text-center mt-3'>The max number of 3 numbers $firstNumber, $secondNumber, $thirdNumber is: <strong>$max</strong></p>";
// }
if (isset($_POST['btnSubmit'])) {
    $numbers = $_POST['Number'];
    $list = explode(',', $numbers);
    $max = intval($list[0]);
    for($i = 1; $i < count($list); $i++) {
       if($max < intval($list[$i])){
        $max = intval($list[$i]);
       }
    }
    echo "<p  mt-3'>Max is: $max</p>";
}
?>
</body>
</html>
