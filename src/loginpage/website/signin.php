<?php
    include("database.php");
    session_start();
?>

<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = filter_input(INPUT_POST, "signin_username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "signin_password", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql =  "SELECT * FROM users WHERE username = '$username' ";
        $check = mysqli_query($conn, $sql);
       
        if (mysqli_num_rows($check) > 0){
            $row  = mysqli_fetch_assoc($check);
            if (password_verify($password, $row["password"])){
                $_SESSION["sigin_username"] = $username;
                $_SESSION["sigin_password"] = $hash;
                setcookie("username", $username, time() + (86400 * 30), "/");
                header("Location: /shutup/src/index.html");
                exit();
                echo "welcome";
            }
            else{

                echo "Incorrect username or password " ;            
            
            }
             
            
        }
        else{

            echo "Incorrect username or password";
                
        }

   
    }
    
?>