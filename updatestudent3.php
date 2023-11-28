<?php
    $upload_flag = 0;
        if($_FILES['photo']['name'] != ""){
            $filename = $_FILES['photo']['name'];
            $tempname = $_FILES['photo']['tmp_name'];
            move_uploaded_file($tempname, "images/".$filename);
            $upload_flag = 1;
        }

        $id = $_POST["id"];
        $name = $_POST["name"]; 
        $gender = $_POST["gender"];
        $birthdate = $_POST["birthdate"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $photo = $_FILES["photo"];

        $con = mysqli_connect("localhost","root","root","studsystem");

        if($upload_flag == 0){
            //No photo
            $sql = "Update students set name = '$name', 
                        gender = '$gender',
                        birthdate = '$birthdate',
                        phone = '$phone',
                        email ='$email'
                    where id =$id;
                    ";
        }else if($upload_flag == 1){
            $sql = "Update students set name = '$name', 
                        gender = '$gender',
                        birthdate = '$birthdate',
                        phone = '$phone',
                        email ='$email',
                        photo = '$filename'
                    where id =$id;
                    ";
        }

                    
        $result = mysqli_query($con, $sql);

        if ($result){
            header("location:updatestudent.php");
        }else{
            echo "Error";
        }

    $row =mysqli_fetch_array($result);
    echo "<p>Student name: $name";
    echo "<p>Gender: $gender";
    echo "<p>Birthdate: $birthdate";
    echo "<p>Phone: $phone";
    echo "<p>Email: $email";



?>