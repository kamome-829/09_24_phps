<?php
session_start(); // 必須！
$_SESSION['n'] += 1; // session変数を+1する
echo $_SESSION['n']; // 結果を出力
