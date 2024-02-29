
<?php include ("server.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <form action="login_db.php" method="POST">
        <div class="innput-group">
            <input type="text" name="studentid"  class="form-control" placeholder="PSU PASSPORT ACCOUNT NAME">

            <input type="password" name="password"  class="form-control" placeholder="PASSWORD">

            <input type="submit" name="submit" value="Login">
        </div>
        <p>กรณีศึกษายังไม่เคยเข้าสู่ระบบลงทะเบียนก่อน <a href="register.php">regtister</a></p>
    </form>
    


</body>
</html>