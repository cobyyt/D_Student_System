<?php include("connect.php"); ?>
<?php

$id= $_GET['id'];

      $sql = "Delete FROM students where id =$id;";
      $result = mysqli_query($con, $sql);
      if ($result){
        echo "Record deleted";
        header("location:deletestudent.php");
      }else{
        echo "Error";
      }
?>