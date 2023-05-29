<!-- Variables de sesion -->
<?php

session_start();

$_SESSION["user"]="Gefferson7";
$_SESSION["status"]="Logged in";

echo "Session started".":<br/>";
echo "User: ".$_SESSION["user"]." status: ".$_SESSION["status"];

?>