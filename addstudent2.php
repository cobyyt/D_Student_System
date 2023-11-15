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
<h1>New student</h1>

<?php

    include("connect.php");
    $filename = $_FILES['photo']['name'];
    $tempname = $_FILES['photo']['tmp_name'];
    move_uploaded_file($tempname, "images/".$filename);

    $name = $_POST["name"]; 
    $gender = $_POST["gender"];
    $birthdate = $_POST["birthdate"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $photo = $_FILES["photo"];

    echo "<p>Student name: $name";
    echo "<p>Gender: $gender";
    echo "<p>Birthdate: $birthdate";
    echo "<p>Phone: $phone";
    echo "<p>Email: $email";

    

    if($con){
            $sql = "Insert into students(name, gender, birthdate, phone, email, photo) values
                ('$name','$gender','$birthdate','$phone','$email','$filename')
            ";

        $result = mysqli_query($con,$sql);

        if($result){
            echo "<h2>New student record created successfully!</h2>";
        }else{
            echo "<h2>Error: " . $sql. "</h2>";
        }

        echo "<a href = 'menu.php'>Back to Menu</a>";

    }else{
        echo "Connection failed";
    }

?>


</body>
