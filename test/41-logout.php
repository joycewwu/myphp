<?php
session_start();

unset($_SESSION['account']);

header('Location: 39-login.php');
