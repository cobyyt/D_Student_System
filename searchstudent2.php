<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css"> 
</head>

<?php
        $keyword = $_GET['keyword'];
        $con = mysqli_connect("localhost", "root", "root", "studsystem");
        $sql = "SELECT * FROM students 
                where name like '%$keyword%' or phone like '%$keyword%'" ;
        $result = mysqli_query($con, $sql);

        $rowcount =mysqli_num_rows($result);
        if ($rowcount == 0){
            echo "<h2>No matching records</h2>";
        }else{
            echo "<h2>$rowcount records matched</h2>";
            echo "    
                <table class='table table-striped'>

                    <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Email</th>    
                    </tr>

                ";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['gender'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td><a href='liststudent2.php?id=" . $row['id'] . "'>Details</a></td>";
                        echo "</tr>";
                    }
                echo "</table>";
        }
?>
