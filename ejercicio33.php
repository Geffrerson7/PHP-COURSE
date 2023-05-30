<!-- Destruccion de variable de sesión -->
<?php

session_start();
session_destroy();

echo "Se destruyó la sesión";

?>