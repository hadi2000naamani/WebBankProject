<?php
    
    // $host = '127.0.0.1';
    // $db   = 'usersdb';
    // $user = 'root';
    // $pass = '';
    // $charset = 'utf8mb4';

    // $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    // $options = [
    //     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //     PDO::ATTR_EMULATE_PREPARES   => false,
    // ];

    // $pdo = new PDO($dsn, $user, $pass, $options);
    $pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=usersdb','root','root');

    $stmt = $pdo->prepare("SELECT password, accountNumb FROM user WHERE email = :email");
    $stmt->execute(['email' => $_POST['email']]);

    if ($stmt->rowCount() == 0) {
        //Your email isn't even in the database
        header("Location: ../LogInForm.html");
        echo '<script>alert("Invalid Email!")</script>';
    } else {
        foreach ($stmt as $row)
        {
            if ($_POST['password'] == $row['password']) {
                //Correct Password Inserted

                $cookie_name = "userTolkien";
                $value = $row['accountNumb'];
                setcookie($cookie_name, $value, time() + (86400*30), '/');
                header("Location: ../BankSampleTest.html");
            } else {
                //Wrong Password Inserted
                echo '<script>alert("Wrong Password!")</script>';
                header("Location: ../LogInForm.html");
            }
            //echo $row['password']."\t".$row['accountNumb']."\n";
        }
    }
    
?>