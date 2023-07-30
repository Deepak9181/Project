<?php
include("first.php");
include("database.php");
$flag=0;
if(isset($_POST['submit'])){

  $name=$_POST['name'];
  $roll=$_POST['roll'];
  $sql="INSERT INTO `student` (`Name`, `Rollno`) VALUES ('$name', '$roll')";

  $result=mysqli_query($conn,$sql);

  if($result){
    $flag=1;
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
  <?php if ($flag){ ?>
    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>Attendance data successfully inserted
  </div>
<?php }?>
  <div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>
              <a class=" btn btn-success" href="add.php">Add student</a>
              <a class=" btn btn-info pull-right" href="markattendance.php">Back</a>
            </h2>
        </div>


        <div class="panel-body">
          <form action="add.php" method="post">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control"  name="name" id="name" required>
            </div>
            <div class="form-group">
              <label for="roll">Roll No:</label>
              <input type="text" class="form-control" name="roll" id="roll" required>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" name="submit" >
            </div>
          </form>
        </div>
    </div>
</div>
</body>

</html>