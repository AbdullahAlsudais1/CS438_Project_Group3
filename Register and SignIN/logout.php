<?php
session_start();
session_destroy();
header('Location: SignIN.php');
exit;

?>