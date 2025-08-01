<?php
session_start();
session_unset();
setcookie("admin_remember","",time()-3600,"/");
header("location:login.php");
exit();
?>