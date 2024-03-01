<?php
// ตรวจสอบว่ามีการส่งคำขอ POST มาหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ตรวจสอบว่ามีค่าของเวลาและวันที่ที่ถูกส่งมาหรือไม่
    if (!empty($_POST["time"]) && !empty($_POST["date"]) && !empty($_POST["room"])) {
        // เชื่อมต่อกับฐานข้อมูล (คุณต้องแทนที่ชื่อผู้ใช้ รหัสผ่าน และชื่อฐานข้อมูลด้วยข้อมูลของคุณ)
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "booking_database";

        // สร้างการเชื่อมต่อใหม่
        $conn = new mysqli($servername, $username, $password, $dbname);

        // ตรวจสอบการเชื่อมต่อ
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // กำหนดค่าตัวแปรจากข้อมูลที่ส่งมา
        $time = $_POST["time"];
        $date = $_POST["date"];
        $room = $_POST["room"];

        // เตรียมคำสั่ง SQL เพื่อแทรกข้อมูลใหม่
        $sql = "INSERT INTO bookings (time, date, room) VALUES ('$time', '$date', '$room')";

        if ($conn->query($sql) === TRUE) {
            echo "การจองสำเร็จแล้ว";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // ปิดการเชื่อมต่อกับฐานข้อมูล
        $conn->close();
    } else {
        echo "กรุณาเลือกเวลาและวันที่";
    }
}
?>
