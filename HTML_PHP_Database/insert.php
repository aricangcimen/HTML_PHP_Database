<?php 
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phonecode'];

if(!empty($username) || !empty($password)  ||  !empty($gender)  || !empty($email) || !empty ($phone) )
{
$host = "localhost";
$dbUserName = "root";
$dbpassword = "";
$dbname = "youtube";

$conn = new mysqli($host ,$dbUserName ,$dbpassword ,$dbname);
if(mysqli_connect_error())
{
die('Connect Error ('. mysqli_connect_error())
}else {

    $SELECT = "SELECT  email From register Where  email = ? Limit 1";
    $INSERT = "INSERT Into register (username , password , gender , email , phonecode ,phone ) values(?,?,?,?,?)";
}
.
}else {
echo "All field are required";
die();
}






?>
