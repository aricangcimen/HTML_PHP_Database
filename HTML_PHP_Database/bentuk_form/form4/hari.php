<?php
if(isset ($_POST['tekan'])){
$x = $_POST['minggu'];
echo $x;
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
<form action="" method="POST">
Select a week:<br>
  <input type="week" name= "minggu">
  <input type="submit" name = "tekan"> 
<form>
</body>
</html>