<?php 
if (isset($_POST['submit'])){
echo "Hai saya {$_POST['text']}";
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
    <form method ="POST" action ="">
    <input name = "text"  type = "text"/>
    
    <input name = "submit"  type = "submit" value = "submit !!"/>
    
    
    



    </form>
</body>
</html>