<?php
    include("../../database/db.php");
    include("../../helpers/validateTopic.php");

    $table = 'topics';

    $errors = array();
    $id = '';
    $name = '';

    $topics = getUsers($table);

    if (isset($_POST['add-topic'])) {
        $errors = validateTopic($_POST);

        if (count($errors) === 0) {
            unset($_POST['add-topic']);
            $topic_id = create($table, $_POST);
            header('location: ../topics/index.php');
            exit();
        } else {
            $name = $_POST['name'];
        }

        
    }


    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $topic = getOneUser($table, ['id' => $id]);
        $id = $topic['id'];
        $name = $topic['name'];
    }


    if (isset($_GET['del_id'])) {
        $id = $_GET['del_id'];
        $count = delete($table, $id);
        header('location: ../topics/index.php');
        exit();
    }


    if(isset($_POST['update-topic'])) {
        $errors = validateTopic($_POST);

        if (count($errors) === 0) {
            $id = $_POST['id'];
            unset($_POST['update-topic'], $_POST['id']);
            $topics_id = update($table, $id, $_POST);
            header('location: ../topics/index.php');
            exit();
        } else {
            $id = $_POST['id'];
            $name = $_POST['name'];
        }      
    }
?>