<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css"> 
</head>

<body>

      <?php

      $id= $_GET['id'];

      $con = mysqli_connect("localhost","root","root","studsystem");
            $sql = "SELECT * FROM students where id =$id";
            $result = mysqli_query($con, $sql);
            $row =mysqli_fetch_array($result);


      $name = $row["name"]; 
      $gender = $row["gender"];
      $birthdate = $row['birthdate'];
      $phone = $row["phone"];
      $email = $row["email"];
      $photo = $row["photo"];
      
      ?>

      <h1>Update information</h1>
      <form action="updatestudent3.php" method="post" enctype="multipart/form-data">

      <input type="hidden" name="id" value="<?php echo $id;?>"/>
      Name:
            <input type="text" name="name" value="<?php echo $name;?>">
            <p></p>

      Gender:
            <input type="radio" name="gender" value="M" <?php if($gender =="M") echo"checked"; ?>/>M
            <input type="radio" name="gender" value="F" <?php if($gender =="M") echo"checked"; ?>/>F
            <p></p>

      Birthdate:
      <input type="date" name="birthdate"  value="<?php echo $birthdate;?>"/>
      <br><br>

      phone:
            <input type="tel" name="phone" value="<?php echo $phone;?>" />
            <p></p>

      Email:
            <input type="email" name="email"  value="<?php echo $email;?>"/>
            <p></p>     

      Please select file
      <input type="file" name="photo" />
      <br>
      <img src="images/<?php echo $phone;?>" width="100px"/>
      <p></p>

      <input type="submit" value = "Update"/>


      </form>
</body>