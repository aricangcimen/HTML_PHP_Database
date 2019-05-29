<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>
</head>
<body>
<form action = "insert,php" method = "POST">
<table>
    <tr>
    <td> Name :     </td>
    <td> <input type = "text" name = "username"></td>
    </tr>
    <tr>
    <td>Password :   </td>
    <td> <input type = "password" name = "password"></td>
    </tr>
    <tr>
    <td> Gender : </td>
     <input type = "radio" name = "gender" value = m > Male
     <input type = "radio" name = "gender"  value = f > Female
    </td>
    </tr>
    <td> email: </td>
    <td> <input type: "email"> name: "email"></td>
    </tr>
    <tr>
    <td> Phone No : </td>
    <td>
    <select name:"Phonecode">
        <option selected hidden = "">Select Code </option>
        <option value = "977"> 977</option>
        <option value = "978"> 978</option>
        <option value = "979"> 979</option>
        <option value = "973"> 973</option>
        <option value = "972"> 972</option>
        <option value = "971"> 971</option>
        <option value = "974"> 974</option>
        <option value = "975"> 975</option>
        <option value = "972"> 972</option>
    </select>
    <input type = "phone" name = "phone">      
</td>
</tr>
<tr>
    <td><input type = "phone"></td>
</tr>
<tr>
    <td><input type= "submit" value = "submit"></td>
</tr>
<tr>
    <td><input type= "submit" value = "submit"></td>
</tr>


</table>
</form>  
</body>
</html>