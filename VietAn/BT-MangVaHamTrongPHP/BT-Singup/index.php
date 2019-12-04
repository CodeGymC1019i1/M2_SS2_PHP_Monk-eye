<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["tel"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];
    } else {
        if (empty($_POST["username"]))
            echo "Error! Emty username!";
        if (empty($_POST["email"]))
            echo "Error! Emty email!";
        if (empty($_POST["telephone"]))
            echo "Error! Emty tel!";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .login {
            text-align: center;
            height: 250px;
            width: 300px;
            margin: auto;
            padding: 10px;
            border: 1px solid orange;
        }

        .login input {
            padding: 5px;
            margin: 5px
        }

        input [type = text] {
            width: 200px;
            border: 1px solid black;
        }

        input [type = password] {
            width: 200px;
            border: 1px solid black;
        }

        input [type = submit] {
            border-radius: unset;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="Tên người dùng"/> <br>
        <input type="email" name="email" placeholder="Email"/> <br>
        <input type="tel" name="telephone" placeholder="Điện thoại"/> <br>
        <input type="submit" value="Submit"/>
    </div>
</form>
</body>
</html>