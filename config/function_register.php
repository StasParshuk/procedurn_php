<?php

function register(array $fields)
{
    try {
        validateFields($fields);

        $db = DB::connect();
        $query = "INSERT INTO users (name, surname, email, password) VALUES (:name, :surname, :email, :password)";
        $query = $db->prepare($query);

        $query->bindParam('name', $fields['name']);
        $query->bindParam('surname', $fields['surname']);
        $query->bindParam('email', $fields['email']);

        $password = password_hash($fields['password'], PASSWORD_BCRYPT);

        $query->bindParam('password', $password);

        if ($query->execute()) {
            alert('success', 'User was created!');
            redirect_home();
        }
    } catch (Exception $exception) {
        alert('danger', $exception->getMessage());
        redirect_home('/register');
    }
}

function validateFields(array $fields)
{
    unset($_SESSION['register']);
    $_SESSION['register']['fields'] = $fields;
    var_dump($fields);

    if (emptyFields($fields, 'register')) {
        redirect_home('/register');
    }
}


