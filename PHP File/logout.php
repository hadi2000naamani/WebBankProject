<?php 

session_start();
unset($_SESSION["username"]);
session_destroy();

unset($_COOKIE['userTolkien']); 
    setcookie('userTolkien', null, -1, '/');

unset($_COOKIE['adminTolkien']); 
    setcookie('adminTolkien', null, -1, '/');  

    header('Location: ../BankSampleTest.html');
?>