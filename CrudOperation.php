<?php
include("connect.php");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $number=$_POST['number'];
    $address=$_POST['address'];
    $query="insert into phpcrud(username,email,mobile,address) values('$name','$mail','$number','$address')";
    $result=mysqli_query($connect,$query);
    if($result){
     echo '<script>alert("Data Successfully Saved");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD-Project</title>
    <link rel="stylesheet" href="style.css">
    <style>
body{
    background-color: aliceblue;
    border: 0px solid;
    max-width: 500px;
    margin:0 auto;

}
input{
    display: block;
    margin: 10px;
    padding: 10px;
    width: 90%;
    border: none;
    outline: none;
}
.btn{
    width:45%;
    background-color: green;
    cursor: pointer;
    border-radius:10px;
    margin:10px auto;
} 
.btn:hover{
    background: red;
    color: white;
}
a{
    text-decoration: none;
}
</style>
</head>
<body>
    <h1>USER DATA ENTRY</h1>
 
    <a href="./display.php">View Data</a>
   <form action="#" method="POST">
    <input type="text" placeholder="Enter Your Name" required autocomplete="off" name="name">
    <input type="mail" placeholder="Enter Your Email" required autocomplete="off" name="mail">
    <input type="number" placeholder="Enter Your Mobile Number" required autocomplete="off" name="number">
    <input type="text" placeholder="Enter Your Address" required autocomplete="off" name="address">
    <input type="submit" class="btn" name="submit">
    

   </form> 
</body>
</html>