<?php include('server.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>หน้าจองห้อง</title>
</head>
<body>
    <div>
         <ul class="ps-0 ms-0">
            <li><a href="index.php">Home</a></li>
            <li><a href="booking.php">Room</a></li>
            <li><a href="history">History</a></li>
        </ul>
     </div>

<?php

    // Check if the success message exists in the session
    if(isset($_SESSION['suc'])) {
        // Display the success message
        echo "<script>alert('" . $_SESSION['suc'] . "');</script>";
        // Clear the success message after displaying it
        unset($_SESSION['suc']);
    } elseif(isset($_SESSION['err'])) {
        // Display the err message
        echo "<script>alert('" . $_SESSION['err'] . "');</script>";
        // Clear the err message after displaying it
        unset($_SESSION['err']);
    }
?>

     

    <form action="booking_db1.php" method="POST">
    <div class="time1">
        <input type="hidden" name="room" value="1">  
        <input type="hidden" name="studentid" value="<?php echo $_GET['studentid']; ?>"> 
        <input type="hidden" name="nameroom" value="Multimedia zone"> 
        <h2>Multimedia zone</h2>
        <img src="./img/Multimedia zone room.jpg" alt="Multimedia zone" width="400">
        <label for="date1">เลือกวันที่:</label>
        <input type="date" id="date1" name="date1"> 
        <select name="time1" id="time1"> 
            <option value="">เลือกเวลาจอง</option>
            <option value="10.00-12.00">10.00-12.00 นาที</option>
            <option value="12.00-14.00">12.00-14.00 นาที</option>
            <option value="14.00-16.00">14.00-16.00 นาที</option>
            <option value="16.00-18.00">16.00-18.00 นาที</option>
            <option value="18.00-20.00">18.00-20.00 นาที</option>
        </select>
    </div>
            <button name="submit" type="submit">จองห้อง</button> 
            
    </form>
    <form action="booking_db2.php" method="POST">
    <div class="time2">
        <input type="hidden" name="room" value="2">  
        <input type="hidden" name="studentid" value="<?php echo $_GET['studentid']; ?>"> 
        <input type="hidden" name="nameroom2" value="Slc tutoring 1"> 
        <h2>Slc tutoring 1</h2>
        <img src="./img/22.jpg" alt="slc tutoring 1" width="400"><br><br>
        <label for="date2">เลือกวันที่:</label>
        <input type="date" id="date2" name="date2">
        <select name="time2" id="time2">
            <option value="">เลือกเวลาจอง</option>
            <option value="10.00-12.00">10.00-12.00 นาที</option>
            <option value="12.00-14.00">12.00-14.00 นาที</option>
            <option value="14.00-16.00">14.00-16.00 นาที</option>
            <option value="16.00-18.00">16.00-18.00 นาที</option>
            <option value="18.00-20.00">18.00-20.00 นาที</option>
        </select>
    </div>
    <button name="submit2" type="submit">จองห้อง</button> 
            
    </form>
    
    <form action="booking_db3.php" method="POST">
        <input type="hidden" name="room" value="3">  
        <input type="hidden" name="studentid" value="<?php echo $_GET['studentid']; ?>"> 
        <input type="hidden" name="nameroom" value="Slc tutoring 2">
    <div class="time3">
        <h2>Slc tutoring 2</h2>
        <img src="./img/55.jpg" alt="slc tutoring 2" width="400">
        <label for="date3">เลือกวันที่:</label>
        <input type="date" id="date3" name="date3">
        <select name="time3" id="time1 3">
            <option value="">เลือกเวลาจอง</option>
            <option value="10.00-12.00">10.00-12.00 นาที</option>
            <option value="12.00-14.00">12.00-14.00 นาที</option>
            <option value="14.00-16.00">14.00-16.00 นาที</option>
            <option value="16.00-18.00">16.00-18.00 นาที</option>
            <option value="18.00-20.00">18.00-20.00 นาที</option>
        </select>
    </div>    
    <button name="submit3" type="submit">จองห้อง</button> 
        
    </form>
    
    <script>
    function cancelBooking() {
        document.getElementById("bookingForm").reset();
    }
</script>
</body>
</html>