<?php
session_start();
$pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=admindb','root','root');
// $stmt = $pdo->query("SELECT Username, Password FROM admin");

// $stmt->execute()

$stmt = $pdo->prepare("SELECT Password FROM admin WHERE Username = :Username");
    $stmt->execute(['Username' => $_POST['username']]);

    if ($stmt->rowCount() == 0) {
        //Your username isn't even in the database
        
        echo '<script>alert("Invalid User!")</script>';
        header('Location: ../LogInForm.html');
        
    } else {
        foreach ($stmt as $row)
        {
            if ($_POST['pin'] == $row['Password']) {
                // Correct Password Inserted
                $_SESSION["username"] = $_POST["username"];
                $_SESSION["success"] = "Logged in.";
                echo $_SESSION["username"];
                header('Location: ../BankSampleTest.html');
                // return;
                
            } else {
                //Wrong Password Inserted
                $_SESSION["error"] = "Incorrect password.";
                echo '<script>alert("Wrong Password!")</script>';
                header('Location: ../LogInForm.html');

            }
            //echo $row['password']."\t".$row['accountNumb']."\n";
        }
    }
    // header("Location: ../BankSampleTest.html");



// if (isset($_POST["username"]) && isset($_POST["pin"])) {
//      unset($_SESSION["username"]); // Logout current user
//     if ($_POST['pin'] == $row['Password']) {
//         $_SESSION["username"] = $_POST["username"];
//         $_SESSION["success"] = "Logged in.";
//         echo $_SESSION['username'];
//         // header('Location: ../BankSampleTest.html');
        
//         return;
//     } else {
//         $_SESSION["error"] = "Incorrect password.";
//         echo $_SESSION["error"];
//         // header('Location: ../LogInForm.html');
//         return;
//     }
//}
?>