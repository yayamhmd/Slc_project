
<?php 
   session_start();
   include('server.php')
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจองห้องSLC</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body> 
    <div class="name">
        <?php if(isset($_SESSION['username'])):?>
        <?php
            echo $_SESSION['username'];
            ?> <?php endif?>
    </div>
   
        
   
        <div class="content">
        <img src="./img/psu_logo_01.jpg" alt="slc tutoring 2" width="150">
            <h2>SCL Smart Learning Center ศูนย์เรียนรู้ส้างสรรค์</h2>
            <p></p>
            <p></p>
        </div>


        <div>
            <ul class="ps-0 ms-0">
            <li><a href="index.php">Home</a></li>
            <li><a href="booking.php<?php if(isset($_SESSION['studentid'])): ?>?studentid=<?php echo $_SESSION['studentid']; ?><?php endif; ?>">Room</a></li>

            <li><a href="history">History</a></li>
        </ul>
     </div>
     



</body>
</html>