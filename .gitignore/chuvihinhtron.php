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
    
    return $chuvi;
    
    $c = chuvihinhtron();

    echo "$c";
}

// Chu vi hình vuông
function chuvihinhvuong ($canh)
{
    $chuvi = ($canh * 4);
    
    return $chuvi;
    
    $c = chuvihinhvuong()
        
    echo "$c";
}

// Chu vi hình chữ nhật
function chuvihinhchunhat ($chieudai, $chieurong)
{
    $chuvi =($chieudai + $chieurong) * 2;
    
    return $chuvi;
    
    $c = chuvihinhchunhat();
    
    echo "$c";
}
chuvihinhtron ($bankinh);

echo"<br>";

chuvihinhvuong ($canh);

echo"<br>";

chuvihinhchunhat ($chieudai, $chieurong);
?>

</body>
</html>
