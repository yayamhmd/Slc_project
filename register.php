

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<body>
    <div class=header>
        <h2>สมัครสมาชิก</h2>
    </div>
    <form action="register_db.php" method="POST">
        <div class="input-group"> 
            <label for="exampleInputusername" class="form-label">ชื่อ-สกุล</label>
            <input type="text" name="username"  class="form-control"  required><br>
        </div>
        <div class="input-group">
            <label for="student_id" class="form-label"></label>
            <input type="text" name="student_id"  class="form-control" placeholder="รหัสนักศึกษา"><br></div>
        <div class="input-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" require><br>
        </div>
        <div class="input-group">
            <label>สาขา:</label>
            <select name="branch">
            <option value="">เลือกสาขา</option>
            <option value="BIS">BIS</option>
            <option value="MKT">MKT</option>
            <option value="HRM">HRM</option>
            <option value="MICE">MICE</option>
            <option value="LSM">LSM</option>
            <option value="BBA">BBA</option>
            <option value="ACC">ACC</option>
            <option value="FIN">FIN</option>
            
            <!-- เพิ่มตัวเลือกสาขาต่อไปตามต้องการ -->
        </select><br>
        </div>
        <div class="input-group">
            <label for="password_2">Password</label>
            <input type="password" name="password"  class="form-control">
        </div>
        
        <div class="mb-3">
            <button type="sumbit" name="reg"  class="btn">sumbit</button>
        </div>
        <p>เป็นสมาชิกแล้วใช่ไหม คลิ๊กที่นี้เพื่อ</p> <a href="login.php">เข้าสู่ระบบ</a>
    </form>
</body>
</html>

</body>
</html>

</body>
</html>