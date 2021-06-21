<?php
session_start();
session_destroy();
header('Location:/uniasselv/index.php');
exit();