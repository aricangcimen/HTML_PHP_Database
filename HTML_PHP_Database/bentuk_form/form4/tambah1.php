<?php
if(isset ($_POST['tekan'])){
$no1 = $_POST['nomor1'];
$no2 = $_POST['nomor2'];
$no3 = $_POST['nomor3'];

echo "<br>" . $no1 . "</br>";
echo "<br>" . $no2 . "</br>";
echo "<br>" . $no3 . "</br>";
$no4 = $no1 + $no2 + $no3;
echo $no4 ;
}
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
    <input type = "text" name ="nomor1" ><br>
    <input type = "text" name ="nomor2" ><br>
    <input type = "text" name = "nomor3" ><br>
    <input type = "submit" name = "tekan" value = "pijit">
   </form>
  
?>
</body>
</html>