<?php
include("first.php");
include("database.php");
$flag=0;
if(isset($_POST['submit']))
{
    foreach($_POST['att_status']as $id=>$att_status)
    {
        $student_name=$_POST['Name'][$id];
        $roll_number=$_POST['Rollno'][$id];
        $date=date("Y-m-d H:i:s");
            
        $sql="insert into attendance_records(Name,rollno,att_status,date)values('$student_name','$roll_number','$att_status','$date')";
        $result=mysqli_query($conn,$sql);
        if($result){
            $flag=1;
        }

    }
}


?>
<?php if($flag){?>
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>Attendance Submitted
  </div>
  <?php }?>
<div class="container">
<div class="panel panel-default">
        <div class="panel-heading">
            <h2>
              <a class=" btn btn-success" href="add.php">Add student</a>
            </h2>
        </div>
        
        <div class="well text-center">Date:<?php echo date("d-m-Y"); ?></div>
        <div class="panel-body">
        
        <form action="markattendance.php"  method="post">
        
        <table class="table table-striped">
        <tr>
            <th>Serial Number</th><th>Student Name</th><th>Roll Number</th><th>Attendance Status</th>
        </tr>

        <?php 
            $result=mysqli_query($conn,"SELECT * FROM student");
            $serialnumber=0;
            $counter=0;
            while($row=mysqli_fetch_array($result)){
                
                $serialnumber++;
    
        ?>

        <tr>
            <td><?php echo $serialnumber; ?> </td>
            <td><?php echo $row['Name']; ?>
            <input type="hidden" value="<?php echo $row['Name'];?>" name="Name[]"></td>
            <td><?php echo $row['Rollno']; ?> 
            <input type="hidden" value="<?php echo $row['Rollno'];?>" name="Rollno[]">
        </td>
        <td>
            <input type="radio" name=" att_status[<?php echo $counter;?>]" value="Present">Present
            <input type="radio" name=" att_status[<?php echo $counter;?>]" value="Absent">Absent
        </td>
        </tr>
        
        <?php
        $counter++;
            }
        ?>
         </table>

         <input type="submit" class="btn btn-primary" name="submit" >
       

        </form>
    </div>
</div>