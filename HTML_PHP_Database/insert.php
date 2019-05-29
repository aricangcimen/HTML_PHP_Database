<?php 
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phonecode'];

if(!empty($username) || !empty($password)  ||  !empty($gender)  || !empty($email) || !empty ($phone) )
{


}else {
echo "All field are required";
die();
}






?>