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
      <h1>Add New Student</h1>

      <form action="addstudent2.php" method="post" enctype="multipart/form-data">
      
      <div class="col-xs-6 col-sm-6 col-md-6">
            Name:
                  <input type="text" name="name" >
                  <p></p>

            Gender:
                  <input type="radio" name="gender" value="M" >M
                  <input type="radio" name="gender" value="F" >F
                  <p></p>

            Birthdate:
            <input type="date" name="birthdate" >
            <br><br>

            Phone:
                  <input type="tel" name="phone" >
                  <p></p>

            Email:
                  <input type="email" name="email" >
                  <p></p>     

            Please select file
            <input type="file" name="photo" />
            <p></p>

            <input type="submit" value = "Add"/>
      </div>
         

      </form>
</body>