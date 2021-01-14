<?php
session_start(); // session変数を使用する場合も必須！
$_SESSION['n'] = 500; // session変数の宣言
echo $_SESSION['n'];
