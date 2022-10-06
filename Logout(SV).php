<?php  Session_start();    ?>
<?php

session_unset();
session_destroy();
header("Location: http://localhost/ISD-project/Login(SV).php");
?>