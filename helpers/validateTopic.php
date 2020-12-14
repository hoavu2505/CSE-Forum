<?php
    function validateTopic($topic){

        $errors = array();

        if (empty($topic['name'])) {
            array_push($errors, 'Bạn chưa nhập tên topic');
        }
        
        $existingTopic = getOneUser('topics', ['name' => $topic['name']]);
        if ($existingTopic) {
            array_push($errors, 'Oh No! Đã có tên topic này rồi!');
        }

        return $errors;
    }

?>