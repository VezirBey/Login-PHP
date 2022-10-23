<?php

require './connections.php';

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_again = @$_POST['password_again'];

    if(!$username){
        echo "Please enter a username";
    } elseif(!$password || !$password_again) {
        echo "Please enter a password";
    } elseif($password != $password_again) {
        echo "The passwords you entered are not the same";
    } else {
        $sorgu = $db->prepare('INSERT INTO users SET user_name = ?, password = ?');
        $ekle = $sorgu->execute([
            $username, $password
        ]);

        if($ekle) {
            echo "Registration was successful, you are being redirected";
            header('Refresh:2; index.php');
        } else {
            echo "An error occurred, Please try again";
        }
    }
}
?>