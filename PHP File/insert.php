<?php
require_once "users.php";
if ( isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])
&& isset($_POST['password']) ) {
$sql = "INSERT INTO user (fname, lname, email, password)
VALUES (:fname,:lname, :email, :password)";
// echo("<pre>\n Inserted \n</pre>\n");
$stmt = $pdo->prepare($sql);
$stmt->execute(array(
':fname' => $_POST['fname'],
':lname' => $_POST['lname'],
':email' => $_POST['email'],
':password' => $_POST['password']));
}
$stmt = $pdo->query("SELECT * FROM user");
header("Location: ../BankSampleTest.html");
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
