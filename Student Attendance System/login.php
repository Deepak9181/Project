<?php
include('first.php');
include("signdatabase.php");
$showError =0;
if(isset($_POST['submit'])){

  $name=$_POST['name'];
  $password=$_POST['pass'];
  $sql="Select * from users where username='$name' AND password='$password'";

  $result=mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);
  if($num==1){
    $flag=1;
    header("location:markattendance.php");
  }
  else{
    $showError=1;
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php if($showError){?>
<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Invalid Credentials!</strong> Enter valid username and password
  </div>
  <?php }?>
  <br>
    <div class="container">

        <form action="login.php" method="post">
            <div class="form-group">
                <label for="name">UserName</label>
                <input type="text" class="form-control"  name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="text" class="form-control" name="pass" id="pass" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" >
            </div>
        </form>
    </div>
</body>
</html>