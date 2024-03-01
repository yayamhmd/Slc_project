<?php include('server.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าจองห้อง</title>
</head>
<body>

    <form action="">
    <div class="time1">
    <img src="./img/Multimedia zone room.jpg" alt="Multimedia zone" width="200">
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
            <button type="submit">จองห้อง</button>
            
    </form>
    <form action="">
    <div class="time2">
    <img src="./img/22.jpg" alt="slc tutoring 1" width="500"><br><br>
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
            <button type="submit">จองห้อง</button>
    </form>
    
    <form action="">
    <div class="time3">
    <img src="./img/55.jpg" alt="slc tutoring 2" width="200">
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
            <button type="submit">จองห้อง</button>
           
    </form>
    
    <script>
    function cancelBooking() {
        document.getElementById("bookingForm").reset();
    }
</script>
</body>
</html>
