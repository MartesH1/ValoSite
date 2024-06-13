<?php
    $mysql = new mysqli('localhost', 'root', '', 'valo_bd');

    $username = filter_var(trim($_POST['auth_username']));
    $pass = filter_var(trim($_POST['auth_pass']));

    $key = "my3DESkey1234567890123456";

    $iv = openssl_random_pseudo_bytes(8);

    $cipher = "des-ede3";
    $options = 0;
    $encrypted_pass = openssl_encrypt($pass, $cipher, $key, $options, $iv);

    $result = $mysql->query("SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$encrypted_pass'");
    $user = $result->fetch_assoc();

    if($user == NULL){
        setcookie('error', "Неверный логин или пароль", time() + 3, "/");
        header('Location: ../../pageView.php?id=auth.php');
    }
    else{
        setcookie('user', $user['username'], 0, "/");
        setcookie('user_type', $user['type'], 0, "/");
        header('Location: ../../index.php');
    }

    
    $mysql -> close();
?>
