<?php
function add($x,$y,$z){
    $z = $x +$y;
    return $z;
}
function sub($x,$y,$z){
    $z = $x -$y;
    return $z;
}
function multi($x,$y,$z){
    $z = $x *$y;
    return $z;
}
function div($x,$y,$z){
    if($y==0) throw {
        new Exception ("vui long nhap gia tri khac 0")
}
    $z = $x /$y;
    return $z;
}

try {
    div(5,0,0);
        echo "So khac 0";
} catch (Exception $ex) {
    echo "<p>Lỗi hiện tại: " . $ex->getMessage() . "</p>";
}

?>