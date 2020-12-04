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

//    echo $_GET['fullName'];
//    echo $_GET['accountNumb'];
//    echo $_GET['currency'];
//    echo $_GET['numbOfAccounts'];
//    echo $_GET['branch'];

    $stmt = $pdo->prepare("UPDATE user SET currency=:currency, numbOfAccounts= :numbOfAccounts, branch= :branch WHERE accountNumb= :accountNumb");
    $stmt->execute(
        [
            'currency' => $_GET['currency'],
            'numbOfAccounts' => $_GET['numbOfAccounts'],
            'branch' => $_GET['branch'],
            'accountNumb' => $_COOKIE['userTolkien']
        ]
    );

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";