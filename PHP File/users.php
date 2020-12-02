<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=usersdb','root','root');
$stmt = $pdo->query("SELECT * FROM user");
$rows = $stmt-> fetchAll(PDO::FETCH_ASSOC);
// echo '<table border="1">'."\n";

// echo "<tr><td>";
// echo("Account Number");
// echo("</td><td>");
// echo("First Name");
// echo("</td><td>");
// echo("Last Name");
// echo("</td><td>");
// echo("Email");
// echo("</td><td>");
// echo("Currency");
// echo("</td><td>");
// echo("Number of Accounts");
// echo("</td><td>");
// echo("Branch");
// echo("</td></tr>\n");


// foreach($rows as $row){
//     echo "<tr><td>";
//     echo($row['accountNumb']);
//     echo("</td><td>");
//     echo($row['fname']);
//     echo("</td><td>");
//     echo($row['lname']);
//     echo("</td><td>");
//     echo($row['email']);
//     echo("</td><td>");
//     echo($row['currency']);
//     echo("</td><td>");
//     echo($row['numbOfAccounts']);
//     echo("</td><td>");
//     echo($row['branch']);
//     echo("</td></tr>\n");
// }
?>