<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

</body>
</html>
<?php
$arr = [5,10,15,2,6,12];
$min = $arr[0];
$index = 0;
for($i=0;$i<count($arr);$i++){
    if ($min>$arr[$i]){
        $min = $arr[$i];
        $index = $i;
    }
}
echo $index."la vi tri co gia tri nho nhat trong mang";
?>