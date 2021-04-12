<?php
// 可察看是否已登入
session_start();

echo json_encode($_SESSION);

