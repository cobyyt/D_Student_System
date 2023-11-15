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
  <h1>Delete Student</h1>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Email</th>    
      </tr>
    </thead>
    <tbody>
      <?php
        $con = mysqli_connect("localhost","root","root","studsystem");
        $sql = "SELECT * FROM students";
        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['gender'] . "</td>";
          echo "<td>" . $row['phone'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";

          echo "<td><a href='deletestudent2.php?id=" . $row['id'] . "'>Delete</a></td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</body>