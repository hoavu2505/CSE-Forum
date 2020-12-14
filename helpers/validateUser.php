<?php
    function validateUser($user){

        $errors = array();

        if (empty($user['username'])) {
            array_push($errors, 'Bạn chưa nhập tên đăng nhập');
        }
        
        if (empty($user['email'])) {
            array_push($errors, 'Bạn chưa nhập email');
        }

        if (empty($user['password'])) {
            array_push($errors, 'Bạn chưa nhập password');
        }

        if ($user['passwordConf'] !== $user['password']) {
            array_push($errors, 'Password xác nhận chưa khớp');
        }
        
        $existingUser = getOneUser('users', ['email' => $user['email']]);
        if ($existingUser) {
            array_push($errors, 'Email đã có trên hệ thống');
        }

        return $errors;
    }

    function validateLogin($user){

        $errors = array();

        if (empty($user['username'])) {
            array_push($errors, 'Bạn chưa nhập tên đăng nhập');
        }
        

        if (empty($user['password'])) {
            array_push($errors, 'Bạn chưa nhập password');
        }

        return $errors;
    }
?>