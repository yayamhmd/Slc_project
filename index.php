
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
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

</head>
<body> 
    <div class="container">
    <?php include('./template/menu.php');
   
   ?>
</div>
   

        <!-- <h2>มหาวิทยาลัยสงขลานครินทร์</h2>
        <h2>คณะวิทยาการจัดการ</h2> -->
        <!-- <h2>SCL Smart Learning Center ศูนย์เรียนรู้สร้างสรรค์</h2> -->
        </div>
    <div class="name">
        <?php if(isset($_SESSION['username'])):?>
        <?php
            echo $_SESSION['username'];
            ?> <?php endif?>
    </div>
    
       
     



</body>
</html>