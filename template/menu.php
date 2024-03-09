
<nav class="navbar navbar-expand-lg bg-body-tertiary"> 
<div class="container-fluid">
  <a class="navbar-brand" href="#">
    <img src="./img/psu_logo_01.jpg" alt="slc tutoring 2" width="100" height="150">
  </a> 
  <ul class="navbar-nav">
    <li  class="nav-item"><a href="index.php">Home</a></li>
    <li  class="nav-item"><a href="booking.php<?php if(isset($_SESSION['studentid'])): ?>?studentid=<?php echo $_SESSION['studentid']; ?><?php endif; ?>">Room</a></li>
    <li  class="nav-item"><a href="history.php">History</a></li>
    </ul>
</div>
</Nav>