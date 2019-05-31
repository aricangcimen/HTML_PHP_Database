





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method= "POST" action="">
    <input name ="no1" type = "text" >
    <input name ="no2" type = "text">
    <input name ="sub1" type = "submit" value = "tekan"> 
    
<?php
$no1 =$_POST["no1"];
$mo2 =$_POST["no2"];
$penjumlahan = $no1+$no2;
echo "Hasil = $penjumlahan";
?>

</form>  
</body>
</html>