<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table With Database</title>
    <style type = "text/css"></style>
    table
    {
        border-collapse : collapse;
        width : 100%;
        color : #D9645;
        font-family : monospace;
        font-size : 20px;
    }
    th {
        background-color : #f2f2f2;
        color : white;
    }

</head>
<body>
    <table>
    <tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root"," " , "company" );
if($conn -> connect_error){
die("Conecction  failed" . $conn -> connect_error);

}
$sql = "SELECT  id , username , password from login";
$result = $conn -> query($sql);
if($result -> num_rows > 0 ){
    while($row = $result -> fetch_assoc()){
echo "<tr><td>".$row["id"]."</td> <td>" .$row["username"]."</td> <td>".$row["password"]."</td></tr>;
    }
echo "</table>";
}
else {
echo "0 result"
$conn -> close();


}

?>
    </table>
</body>
</html>