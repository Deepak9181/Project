<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if (isset($_POST['submit'])){
    $name=$_POST['fname'];
    $lname=$_POST['lname'];

    $fullName=$name." ".$lname;
    echo "<script>alert('Full Name: $fullName');</script>";
}
?>
<body>
    <form action="name.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" name="fname">
        <br><br>
        <label for="lname">Last Name</label>
        <input type="text" name="lname">
        <br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>


<?php



?>