<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Name <input type="text" name="name"><br>
    Email <input type="email" name="email"><br>
    Phone <input type="number" name="phone"><br>
    <button type="submit">Submit</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    if (empty($name) || empty($phone) || filter_var($email,FILTER_VALIDATE_EMAIL)==false)
    {
        echo "Vui long nhap day du thong tin";
    }
    saveDataJSON("./data.json",$name,$email,$phone);
}
function saveDataJSON($filename,$name,$email,$phone){
        $contact =["name"=>$name,"email"=>$email,"phone"=>$phone];
        $data = json_encode($contact);
        file_put_contents($filename,$data);
}


?>

