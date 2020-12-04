<?php

$host = '127.0.0.1';
$db   = 'usersdb';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);
//$pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=usersdb','root','root');

if (isset($_POST['delete']) && isset($_POST['accountNumb']) ) {
    $sql = "DELETE FROM users WHERE accountNumb = :zip";
    echo "<pre>\n$sql\n</pre>\n";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip' => $_POST['accountNumb']));
    }

$stmt = $pdo->query("SELECT * FROM user");
$rows = $stmt-> fetchAll(PDO::FETCH_ASSOC);
echo '<table border="1">'."\n";

echo "<tr><td>";
echo("Account Number");
echo("</td><td>");
echo("First Name");
echo("</td><td>");
echo("Last Name");
echo("</td><td>");
echo("Email");
echo("</td><td>");
echo("Currency");
echo("</td><td>");
echo("Number of Accounts");
echo("</td><td>");
echo("Branch");
echo("</td></tr>\n");


foreach($rows as $row){
    echo "<tr><td>";
    echo($row['accountNumb']);
    echo("</td><td>");
    echo($row['fname']);
    echo("</td><td>");
    echo($row['lname']);
    echo("</td><td>");
    echo($row['email']);
    echo("</td><td>");
    echo($row['currency']);
    echo("</td><td>");
    echo($row['numbOfAccounts']);
    echo("</td><td>");
    echo($row['branch']);
    echo("</td><td>");
    echo('<form method="post">');
    echo('<input type="hidden" name="accountNumb" value="'.$row['accountNumb'].'">'."\n");
    echo('<input type="submit" value="Delete" name="delete">');
    echo("\n</form>\n");

    echo("</td></tr>\n");
}
?>