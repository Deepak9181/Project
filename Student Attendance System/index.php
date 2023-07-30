<!DOCTYPE html>
<?php
include("signdatabase.php");
include("first.php");
$flag=0;
if(isset($_POST['submit'])){

  $name=$_POST['name'];
  $password=$_POST['pass'];
  $sql="INSERT INTO `users` (`username`, `password`) VALUES ('$name', '$password')";

  $result=mysqli_query($conn,$sql);

  if($result){
    $flag=1;
  }

}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #container {
            border: 1px solid black;
            width: 415px;
            height: 375px;
            padding: 40px;
            border-radius: 15px;
            margin: auto;
            position: relative;
            top: 80px;
            background-color: white;
        }

        label {
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
        }

        input {
            height: 30px;
            width: 320px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }

        body {
            background-color: #ddddee;
        }

        #p1 {
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }

        #btn {
            width: 320px;
            height: 35px;
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 8px;
            background-color: #2b0065eb;
            color: white;
            position: relative;
            left: 10px;
        }

        #p2 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        a {
            text-decoration: none;
        }

        .cnt2 {
            padding: 6px;
        }
    </style>
</head>

<body>
    <?php if($flag){?>
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>Your account is created
  </div>
  <?php }?>
    <div id="container">
        <strong>
            <p id="p1">Enter your Details</p>
        </strong>
        <hr>
        <br>
        <form action="index.php" method="post">
            <div class="cnt2">
                <label for="name">UserName</label><br>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="cnt2">
                <label for="pass">Password</label><br>
                <input type="password" name="pass" id="pass" required>
            </div>
            <br>
            <input type="submit" name="submit" id="btn">
        </form>
        <p id="p2">Already signed up? <span><a href="login.php">Login now</a></span></p>
    </div>
</body>

</html>