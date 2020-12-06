<?php
session_start();
//require_once "users.php";
// if ( isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])
// && isset($_POST['password']) ) {
// $sql = "INSERT INTO user (fname, lname, email, password)
// VALUES (:fname,:lname, :email, :password)";
// // echo("<pre>\n Inserted \n</pre>\n");
// $stmt = $pdo->prepare($sql);
// $stmt->execute(array(
// ':fname' => $_POST['fname'],
// ':lname' => $_POST['lname'],
// ':email' => $_POST['email'],
// ':password' => $_POST['password']));
// }
// $stmt = $pdo->query("SELECT * FROM user");

function is_validemail($email)
{
    return preg_match('/^[\w.-]+@([\w.-]+\.)+[a-z]{2,6}$/is', $email);
}


$pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=usersdb','root','root');


$_SESSION['PersistName'] = $_POST['fname'];
$_SESSION['PersistFamilyName'] = $_POST['lname'];

$email = $_POST['email'];
if (is_validemail($email)) {
    if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])
        && isset($_POST['password'])) {
            $sql = "INSERT INTO user (fname, lname, email, password)
    VALUES (:fname,:lname, :email, :password)";
            //$_SESSION['PersistData'] = $_POST;
            // echo("<pre>\n Inserted \n</pre>\n");
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':fname' => $_POST['fname'],
                ':lname' => $_POST['lname'],
                ':email' => $_POST['email'],
                ':password' => $_POST['password']
            ));
    }
    echo '<script>alert("Welcome "'.$_POST['fname'].')</script>';
    header("Location: ../BankSampleTest.html");
    session_destroy();
    
} else {
//    echo '<script>alert("Invalid Email!")</script>';
    header("Location: ../SignupForm.php");
}
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
