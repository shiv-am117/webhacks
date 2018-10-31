<?php
require 'core.php';
require 'soclogout.php';
session_destroy();
header('Location:userlogin.php');
?>