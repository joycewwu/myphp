<?php

session_start();

unset($_SESSION['user']);

// location: 回到登入頁
header('Location: login.php');
