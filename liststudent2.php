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
      <h1>Student Profile</h1>


<?php

      $id= $_GET['id'];

      $con = mysqli_connect("localhost","root","root","studsystem");
            // fetch student data from the database
            $sql = "SELECT * FROM students where id =$id";
            $result = mysqli_query($con, $sql);
            $row =mysqli_fetch_array($result);


      $name = $row["name"]; 
      $gender = $row["gender"];
      $birthdate = $row['birthdate'];
      $phone = $row["phone"];
      $email = $row["email"];
      $photo = $row["photo"];

      echo "<p>Student name: $name";
      echo "<p>Gender: $gender";
      echo "<p>Birthdate: $birthdate";
      echo "<p>Phone: $phone";
      echo "<p>Email: $email";
      echo "<p><img src='images/$photo' width='200'/>";
      echo "<p></p>";
      echo "<a href = 'liststudent.php'>back</a>";
      
?>

</body>