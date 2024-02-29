<?php
include('server.php');
session_start();

// ตรวจสอบว่ามีการส่งข้อมูลมาจากฟอร์มหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reg'])) {
    // รับค่าจากฟอร์ม
    $username = $_POST["username"];
    $student_id = $_POST["student_id"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $branch = $_POST["branch"];

    // บันทึกข้อมูลในฐานข้อมูล
    $sql = "INSERT INTO user (username, student_id, email, password, branch) VALUES ('$username', '$student_id', '$email', '$password', '$branch')";

    if ($conn->query($sql) === TRUE) {
        echo "alert('ลงทะเบียนสำเร็จ เข้าสู่ระบบเลย')";
        header('location: login.php');
        // สามารถทำการเข้าสู่ระบบทันทีหลังจากการลงทะเบียน
        exit; // ใส่ exit เพื่อหยุดการทำงานของสคริปต์ทันทีหลังจากทำการ redirect
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header('location: register.php');
        exit; // ใส่ exit เช่นเดียวกันที่นี่เพื่อหยุดการทำงานของสคริปต์หลังจากทำการ redirect
    }
}
?>
