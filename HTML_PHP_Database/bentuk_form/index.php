<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailform = $_POST['mail']; 
    $message = $_POST['message'];

    $mailto = "antosan1234567@gmail.com";
    $headers = "From : .$mailform."
    $txt = "You have recived an e-mail from".$name.".\n\n".$message;
    mail($mailto , $subject , $txt , $headers);
    headers("Location: index.php?mailsend")
    
    
    
    mail();


}


?>