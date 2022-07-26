<?php


function login(array $fields)
{
    loginValidateFields($fields);

    $user = db_select('users', conditions: "email = '{$fields['email']}'");
    $user = $user[0] ?? null;

    if (is_null($user) || !password_verify($fields['password'], $user['password'])) {
        alert('danger', 'Credentials are not valid');
        $_SESSION['login']['fields'] = $fields;
        redirect_home('/login');
    }

    if(!empty($_SESSION['user'])){$_SESSION['user'] = [
        'id' => $user['id'],
        'is_admin' => (bool)$user['is_admin'],
    ];}else{
        redirect_home("/login");
        alert('danger', 'неправильные данные');

    }
    var_dump($fields);
    var_dump($user);
}

function loginValidateFields(array $fields)
{
    unset($_SESSION['login']);
    $_SESSION['login']['fields'] = $fields;

    if (emptyFields($fields, 'login')) {
        redirect_home('/login');
    }
}


