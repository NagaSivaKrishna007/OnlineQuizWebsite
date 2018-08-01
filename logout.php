<?php
session_start();
session_destroy();
header('Location: new1.php');
exit;
?>