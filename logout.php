<?php
session_start();
session_destroy();
$_SESSION['username']="";
echo '<script> window.location.href="superadmin_login.php" </script>';

?>
