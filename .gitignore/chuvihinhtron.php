<!DOCTYPE html>
<html>
<body>
<h1>Chu vi  hình tròn</h1>
<?php

$bankinh =;

$canh = ;

$chieurong = ;

$chieudai =;

// Chu vi hình tròn
function chuvihinhtron ($bankinh)
{
    $chuvi = ($bankinh * $bankinh) * 3.14;

    echo "Chu vi hình tròn: $chuvi";
}

// Chu vi hình vuông
function chuvihinhvuong ($canh)
{
    $chuvi = ($canh) * 4;
    echo "Chu vi hình vuông: $chuvi";
}

// Chu vi hình chữ nhật
function chuvihinhchunhat ($chieudai, $chieurong)
{
    $chuvi =($chieudai + $chieurong) * 2;
    echo "Chu vi hình chữ nhật: $chuvi";
}
chuvihinhtron ($bankinh);

echo"<br>";

chuvihinhvuong ($canh);

echo"<br>";

chuvihinhchunhat ($canh, $chieurong);
?>

</body>
</html>
