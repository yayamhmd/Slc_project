<?php
    include('server.php');
    session_start();
    if(isset($_POST['submit3'])){
        $room = $_POST['room'];
        $date = $_POST['date3'];
        $time = $_POST['time3'];
        $nameroom = $_POST['nameroom'];
        $studentid = $_POST['studentid']; 

        $select = "SELECT * FROM booking WHERE room_name = '$nameroom' AND access_date = '$date' AND time = '$time' AND status = 1";
        $resultselect = $conn->query($select);
        
        if($resultselect->num_rows>0){
            $_SESSION['err'] = "ห้องนี้มีการจองแล้ว กรุณาจองใหม่";
            header("location: booking.php?studentid=$studentid");
            exit(); // Terminate script execution
        } else {
            $insert = "INSERT INTO booking (room_name, user_id, access_date,time, status) VALUES ('$nameroom', '$studentid', '$date','$time',1)";
            $resule = $conn->query($insert);
            if($resule){
            $_SESSION['suc'] = "จองสำเร็จ";
            header("location: booking.php?studentid=$studentid");
            exit(); // Terminate script execution
            }
        }
    }
?>