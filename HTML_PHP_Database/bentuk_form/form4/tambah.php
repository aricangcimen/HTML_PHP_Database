<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contoh Tambah</title>
</head>
<body>
<form action = "/action.page.php">
First name:<br>
//contoh type text
<input type="text" name="firstname"><br>
  Last name:<br>
<input type="text" name="lastname">
//contoh type password
User name:<br>
<input type="text" name="username"><br>
  User password:<br>
<input type="password" name="psw">
//contoh type submit
First name:<br>
<input type="text" name="firstname" value="Mickey"><br>
Last name:<br>
<input type="text" name="lastname" value="Mouse"><br><br>
<input type="submit" value="Submit">
//contoh type reset
First name:<br>
<input type="text" name="firstname" value="Mickey"><br>
Last name:<br>
<input type="text" name="lastname" value="Mouse"><br><br>
<input type="submit">
//input type Radio
<input type="radio" name="gender" value="male" checked> Male<br>
<input type="radio" name="gender" value="female"> Female<br>
<input type="radio" name="gender" value="other"> Other
//contoh type checkbox
<input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
<input type="checkbox" name="vehicle2" value="Car"> I have a car 
//contoh input button
<input type="button" onclick="alert('Hello World!')" value="Click Me!">
//contoh input Color
Select your favorite color:
<input type="color" name="favcolor">
//Contoh type Date
Birthday:
<input type="date" name="bday">
//contoh type date
Enter a date before 1980-01-01:
  <input type="date" name="bday" max="1979-12-31"><br>
  Enter a date after 2000-01-01:
  <input type="date" name="bday" min="2000-01-02"><br>
//contoh type Date time local
Birthday (date and time):
<input type="datetime-local" name="bdaytime">
//contoh type Email
E-mail:
<input type="email" name="email">
//contoh input type file
Select a file: <input type="file" name="myFile">
//contoh type month
Birthday (month and year):
<input type="month" name="bdaymonth">
// contoh input type number
Quantity (between 1 and 5):
  <input type="number" name="quantity" min="1" max="5">
//contoh type input restriction
Quantity:
  <input type="number" name="points" min="0" max="100" step="10" value="30">
//contoh input type range
<input type="range" name="points" min="0" max="10">
// contoh input type resech
Search Google:
  <input type="search" name="googlesearch">
//contoh input type phone
Telephone:
  <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">

// contoh input type time
Telephone:
  <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">

// input type url
Add your homepage:
  <input type="url" name="homepage">
// input type week
  Select a week:
  <input type="week" name="week_year">
//



</form>
</body>
</html>