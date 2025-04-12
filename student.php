<?php 
session_start();
     require'database.php';
     if (isset($_POST['save_student']))
     {
        $name=mysqli_real_escape_string($con,$_POST['student_name']);

        $email=mysqli_real_escape_string($con,$_POST['student_email']);

        $phone=mysqli_real_escape_string($con,$_POST['student_phone']);

        $course=mysqli_real_escape_string($con,$_POST['student_course']);

        $query = "INSERT INTO students (name, email, phone, course) VALUES('$name', '$email', '$phone', '$course')";
                $query_run=mysqli_query($con,$query);

        if($query_run){
            $_SESSION['message']="student register successfully";
            header("Location: register.php");
            exit(0);
        }
        else
        {
            $_SESSION['message']="student not register";
            header("Location: register.php");
            exit(0);  
        }


     }
     
 ?>
    










