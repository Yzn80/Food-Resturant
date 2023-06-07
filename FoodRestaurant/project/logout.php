<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['LOGGED_IN']);
session_destroy();
header("location: ../index.php");
exit();