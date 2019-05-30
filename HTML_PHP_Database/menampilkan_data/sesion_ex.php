<?php
include('login.php');
if (isset ($_SESSION['login_user'])){
header("location : profile.php");

}

?>