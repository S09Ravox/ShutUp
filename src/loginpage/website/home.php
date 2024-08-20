<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is homepage <br>
    <form action = "<?php $_SERVER ["PHP_SELF"]?>" method = "post">
        <input type = "submit" name = "log out" value = "log out">
    </form>
    
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        session_destroy();
        header("Location: ./src/index.html");
        exit();
    }
?>