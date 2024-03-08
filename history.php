<?php include('server.php');
    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    
       
</head>
<body>
    <?php
    if(isset($_SESSION['studentid'])) {
    $studentid = $_SESSION['studentid'];
    $sql1 = "SELECT room_name,access_date,time FROM booking WHERE user_id = $studentid";
    $result = $conn->query($sql1);
   

    if ($result->num_rows > 0) {
        // output data of each row
        
        while($row = $result->fetch_assoc()) {
          echo "room: " . $row["room_name"]. " - access: " . $row["access_date"]. "time " . $row["time"]. "<br>";
        }
      } else {
        echo "รหัสนักศึกษา" . $studentid . "ยังไม่มีการจองห้อง" ;
      }
      $conn->close();
    }
    ?>

</body>
</html>