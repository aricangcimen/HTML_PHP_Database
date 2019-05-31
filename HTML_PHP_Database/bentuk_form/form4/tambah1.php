<?php
if(isset ($_POST['tekan'])){
$no1 = $_POST['nomor1'];
$no2 = $_POST['nomor2'];
$no3 = $_POST['nomor3'];
echo $no1+$no2+$no3;



}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action ="" method = "POST" >
    <input type = "text" name ="nomor1" value = "nilai satu "><br>
    <input type = "text" name ="nomor2" value = "nilai dua" ><br>
    <input type = "text" name = "nomor3" value = "nilai tiga"><br>
    <input type = "submit" name = "tekan" value = "pijit">

</body>
</html>