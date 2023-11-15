<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<?php

    if (empty($_POST)){

    }else{

        $error_name = "";
        $error_password = "";
        $errror_login = "";
        $error_count = 0;

        if (empty($_POST['username'])){
            $error_name = "Please enter your name";
            $error_count++;          
        }else{
            $name = $_POST['username'];
        }
        if (empty($_POST['password'])){
            $error_password = "Please enter your password";
            $error_count++; 
            
        }else{
            $password = $_POST['password'];
        }

        if($error_count == 0){
            require("connect.php");
    
            $sql = "select * from logins
            where name = '$name' and
            passwords = '$password';
            ";
            $result = mysqli_query($con, $sql);
            $rowcount = mysqli_num_rows($result);
    
            if ($rowcount == 0){
                echo "Login Failed";
                $errror_login = "Please login again";
            }else if ($rowcount == 1){
                echo "Login Success";
                session_start();
                $_SESSION['name'] = $name;
                $_SESSION['status'] = 'ok';
                header("location:menu.php");
            }   
            $name = "";
            $password = "";
        }
    }

?>




<body>
<div class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
           <div class="navbar-header">
             <button class="navbar-toggle" data-toggle="collapse" data-target="#mymenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
             </button>
    
              <a href="#" class="navbar-brand">ABC School</a>
           </div>
           <div id="mymenu" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="menu.php">Home</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Students</a></li>
                  <li><a href="#">About Us</a></li>
                </ul>
    
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="login_validation.php">
                        <span class="glyphicon glyphicon-log-in"></span>
                         Login
                        </a>
                    </li>
                  </ul>
           </div>
          </div>
        </div>

    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" >

    <div class="container">
            <div class="jumbotron">
                <h1>Welcome to Student System</h1>
            </div>  
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
    Username:
        <input type="text" name="username" value ="<?php echo $name;?>"/>
        <?php if (!empty($error_name)){ echo $error_name;}?>
        <p></p>


    Password:
        <input type="password" name="password" value ="<?php echo $password;?>"/>
        <?php if (!empty($error_password)){ echo $error_password;}?>
        <p></p>


        <input type="submit" value = "Login"/>
    </div>
    </form>
</body>
