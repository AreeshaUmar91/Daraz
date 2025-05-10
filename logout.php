<?php
session_start();
session_unset();
session_destroy();
header("Location: daraz.php"); // Redirect to login page
exit();
