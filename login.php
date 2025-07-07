<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 <h2 class="text-center">Login </h2>
                 <form method="post">
                    <label for="username">User:</label>
                    <input type="text" name="username" id="username" class="form-control" />
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" name="password" id="password" class="form-control"/>
                    <input type="submit" name="btnSend" value="Login" class="btn btn-primary" />
                 </form>
            </div>
        </div>
    </div>
   

<?php
session_start();

if (isset($_POST['btnSend'])) {
    $users = [
        "hutech" => "123",
    ];

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header("Location: sayHello.php");
        exit();
    } else {
        echo "<p style='color:Red;'>Sai tên đăng nhập hoặc mật khẩu.</p>";
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
