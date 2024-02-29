<?php
    session_start();
    include('server.php');
    
    $error = array();

    if (isset($_POST['submit'])) {
        $student_id = mysqli_real_escape_string($conn, $_POST['studentid']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $emailadmin = mysqli_real_escape_string($conn, $_POST['studentid']);

        if (empty($student_id)) {
            array_push($error, "student_id is required");
        }

        if (empty($password)) {
            array_push($error, "password is required");
        }

        if (count($error) == 0) {
          
            $query = "SELECT * FROM user WHERE student_id = '$student_id' AND password = '$password'";
            $result = mysqli_query($conn, $query);

            $admin = "SELECT * FROM admin WHERE email = '$emailadmin' AND password = '$password' ";
            $result_admin = $conn->query($admin);

            if (mysqli_num_rows($result)) {
                $row = $result->fetch_assoc();
                $_SESSION['username'] = $row['username'];
                $username = $_SESSION['username'];
                $_SESSION['success'] = "You are now logged in";
                header("location:index.php");
                exit();
            }else if($result_admin->num_rows>0){
                $rowadmin = $result_admin->fetch_assoc();
                
            }else {
                header("location: login.php");
                exit();
            }
        }
    }
?>
