<?php
    session_start();
    if($_SESSION['status'] != "ok"){
        header("location:login_validation.php");
    }else{
        $login_name = $_SESSION['name'];
    }
?> 
<!-- protection code -->

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
<h1>ABC Student Management System</h1>
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
            <?php echo "Welcome, $login_name"; ?>

        <ul id="menu">
                <ul>
                    <li><a href="addstudent.php">Add New Student</a></li>
                    <li><a href="liststudent.php">List all Student</a></li>
                    <li><a href="deletestudent.php">Delete Student</a></li>
                    <li><a href="searchstudent.php">Search Student</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>    
        </ul>
    </div>
</div>
    <div id="g1">
   
		<img src="pict2.jpg" width="45%" height="300px"/>
   
		<img src="pict3.jpg" width="45%" height="300px"/>
	  
    </div>
</body>