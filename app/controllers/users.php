<?php

include "app/database/db.php";

$errMsg = '';

function userAuth($user) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];
            if($_SESSION['admin']) {
                header('location: ' . BASE_URL . "admin/posts/index.php");
            } else {
                header('location: ' . BASE_URL);
            }
}

//Код для формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {

    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if($login === '' || $email === '' || $passF === '') {
        $errMsg = "Не все поля заполнены";
    } elseif (mb_strlen($login, 'UTF8') < 2){
        $errMsg = "Логин должен быть более 2 символов";
    }
    elseif ($passF !== $passS) {
        $errMsg = "Пароли должны совпадать";
    }
    else {
        $existence = selectOne('users', ['email' => $email]);
        if ($existence['email'] === $email){
            $errMsg = "Пользователь с такой почтой уже зарегистрирован";
        }
        else {
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);

            userAuth($user);



//            $_SESSION['id'] = $user['id'];
//            $_SESSION['login'] = $user['username'];
//            $_SESSION['admin'] = $user['admin'];
//            if($_SESSION['admin']) {
//                header('location: ' . BASE_URL . "admin/admin.php");
//            } else {
//                header('location: ' . BASE_URL);
//            }



        }
    }
} else {
    $login = '';
    $email = '';
}


//Код для формы авторизации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){

    $email = trim($_POST['login']);
    $pass = trim($_POST['password']);

    if($email === '' || $pass === '') {
        $errMsg = "Не все поля заполнены";
    } else {
        $existence = selectOne('users', ['email' => $email]);
        if($existence && password_verify($pass, $existence['password'])) {

            userAuth($existence);



//            $_SESSION['id'] = $existence['id'];
//            $_SESSION['login'] = $existence['username'];
//            $_SESSION['admin'] = $existence['admin'];
//            if($_SESSION['admin']) {
//                header('location: ' . BASE_URL . "admin/admin.php");
//            } else {
//                header('location: ' . BASE_URL);
//            }



        } else {
            $errMsg = "Почта или пароль введены неверно!";
        }
    }
} else {
    $email = '';
}


