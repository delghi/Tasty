<?php

session_start();

unset($_SESSION['user']);
$_SESSION['HTTP_LOGIN'] = false;

session_destroy();
Header("Location: admin.php");


?>