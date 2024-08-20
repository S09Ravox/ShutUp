<?php
    $password = '1234';
    $hash = password_hash($password, PASSWORD_DEFAULT);

    if(password_verify("1234", '$2y$10$wq4ZTWT8hgpxC
')){
        echo "duz";
    }
    else{
        echo "sehv"; 
        echo "$hash";
    }
?>