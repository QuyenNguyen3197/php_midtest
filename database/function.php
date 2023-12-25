<?php
    include "db.php";
    session_start();

    function createRow(){
        if(isset($_POST['register'])){
            global $conn;
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = "INSERT INTO `users`(`firstName`, `lastName`, `email`, `password`) VALUES ('$firstName','$lastName','$email','$password')";
            $result = mysqli_query($conn, $query);
            if(!$result){
                die("Query failed!".mysqli_error($conn));
            }else{
                header('Location: login.php');
            }
            }
        }

    function login($email, $password){
        if(isset($_POST['login'])){
            global $conn;
            $query = "SELECT * FROM `users` WHERE email='".$_POST['email']."' and password='".$_POST['password']."'";
            echo($query);
            $result = mysqli_query($conn, $query);
            if(!$result){
                die("Query failed!".mysqli_error($conn));
            }
            while ($row = mysqli_fetch_array($result)){
                $db_email = $row['email'];
                $db_password = $row['password'];
                $db_firstName = $row['firstName'];
                $db_lastName = $row['lastName'];
                if($password===$db_password && $email===$db_email){
                    $_SESSION['s_email'] = $db_email;
                    $_SESSION['s_firstName'] = $db_firstName;
                    $_SESSION['s_lastName'] = $db_lastName;
                    header('Location: admin/index.php');
                }else{
                    header('Location: login.php');
                }
                }

            }
        }
    
    
?>