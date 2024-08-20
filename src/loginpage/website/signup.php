<?php
    include("database.php");
    session_start();
?>


<?php 
    include("signup.html");
    /*
    if($_SERVER["REQUEST_METHOD"] == "POST") { // burda REQUEST_METHOD u chat sehifesinin url siynen deyisirik
        $username = filter_input(INPUT_POST, "signup_username", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $first_name = filter_input(INPUT_POST, "first_name", FILTER_SANITIZE_SPECIAL_CHARS);
        $second_name = filter_input(INPUT_POST, "second_name", FILTER_SANITIZE_SPECIAL_CHARS);    
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $password_val = filter_input(INPUT_POST, "password_val", FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($username) || empty($password)){
            echo"Enter username and password";
        }
        else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(username, email, first_name, last_name, password) VALUES('$username', '$email','$first_name','$second_name','$hash')";

            try {
                mysqli_query($conn, $sql);
                $_SESSION["signup_username"] = $username;
                $_SESSION["signup_password"] = $hash;
                setcookie("signup_username", $username, time() + (86400 * 30), "/");
                header("Location: home.php");
            }
            catch (mysqli_sql_exception){
                echo '<p class="font-light">This username has already taken</p>';
            }
        }
    }
*/
?>