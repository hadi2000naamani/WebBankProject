<?php
require_once "users.php";
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

$email = $_POST['email'];

if (is_validemail($email)) {
    if (
        isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])
        && isset($_POST['password'])
    ) {
        $sql = "INSERT INTO user (fname, lname, email, password)
VALUES (:fname,:lname, :email, :password)";
        // echo("<pre>\n Inserted \n</pre>\n");
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':fname' => $_POST['fname'],
            ':lname' => $_POST['lname'],
            ':email' => $_POST['email'],
            ':password' => $_POST['password']
        ));
    }
    echo '<script>alert("Welcome "+ :fname)</script>';
    header("Location: ../BankSampleTest.html");
    
} else {
    echo '<script>alert("Invalid Email!")</script>';
    header("Location: ../SignupForm.html");
    
}

// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
