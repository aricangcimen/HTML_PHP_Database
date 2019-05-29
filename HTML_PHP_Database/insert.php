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
    $INSERT = "INSERT Into register (username , password , gender , email , phonecode ,phone ) values(?,?,?,?,?,?)";
    //prepare statement
    $stmt = $conn->prepare($SELECT);
    $stmt -> bind_param("s" , $email);
    $stmt -> execute();
    $stmt -> bind_result($email);
    $stmt -> store_result();
    $rnum = $stmt -> num_rows;

    if ($rnum==0){
$stmt -> close();
$stmt = $conn -> prepare($INSERT);
$stmt -> bind_param("ssssii" , $username , $password , $gender , $email , $phoneCode ,$phone);
$stmt -> execute();
echo "New Record inserted sucesfully"


    }else 
    {
        echo " some onev alredy registery with this email";

    }
    $stmt->close();
    $conn->close();


}

}else {
echo "All field are required";
die();
}






?>
