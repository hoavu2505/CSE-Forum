<?php

    include("database/db.php");
    include("helpers/validateUser.php");

    $errors = array();

    $username = '';
    $email = '';
    $password = '';
    $passwordConf = '';
    $table = 'users';


    function loginUser($user){
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];

        if($_SESSION['admin']) {
            header('location: dashboard.php');
        }else {
            header('location: index.php');
        }           
        exit();
    }

    if(isset($_POST['register-btn'])) {
        $errors = validateUser($_POST);
        
        if(count($errors) === 0) {
            unset($_POST['register-btn'], $_POST['passwordConf']);
            $_POST['admin'] = 0;

            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $user_id = create('users', $_POST);
            $user = getOneUser($table, ['id' => $user_id]);

            //login
            loginUser($user);
            

        } else {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordConf = $_POST['passwordConf'];
        }       
    }


    if(isset($_POST['login-btn'])) {
        $errors = validateLogin($_POST);

        if (count($errors) === 0) {
            $user = getOneUser($table, ['username' => $_POST['username']]);

            if ($user && password_verify($_POST['password'], $user['password'])) {
                loginUser($user);

            } else {
                array_push($errors, 'Sai tài khoản hoặc mật khẩu');
            }
            
        }

        $username = $_POST['username'];
        $password = $_POST['password'];
    }


?>