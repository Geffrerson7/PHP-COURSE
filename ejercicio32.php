<!-- Variables de sesion -->
<?php
session_start();
echo "User: ".$_SESSION["user"]." status: ".$_SESSION["status"];
?>