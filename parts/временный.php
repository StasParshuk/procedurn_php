<?php
$banner = [
    [
        'href' => "#",
        'string1' => "купи слона",
        'string2' => "купи слона",
        'string3' => "купи слона",
        'text' => "купи ",


    ],[
        'href' => "#",
        'string1' => "купи слона",
        'string2' => "купи слона",
        'string3' => "купи слона",
        'text' => "купи ",


    ],];
//var_dump($banner);
$body = json_encode($banner);
echo var_dump($body);
//$bodyold = json_decode($body,true);
//
//echo var_dump($bodyold);
//$banner = [
//    [
//        'title' => "Отзывы клиентов ",
//        'description' => "следующим счастливым клиентом будешь ты",
//    ],
//    ];
//$body = json_encode($banner);
//echo var_dump($body);



//function register(array $fields)
//{
//
//    validate_fields($fields);
//
//}
//
//function validate_fields(array $fields)
//{
//    unset($_SESSION['register']);
//
//
//    if (!password_validaation($fields['password'])) {
//        redirect_home("/register");
//
//    }
//
//}
//
//function empty_fields(array $fields):bool
//{
//    $result = true
//    $emptyFields = array_keys($fields, null);
//    if (!empty($emptyFields)) {
//        foreach ($emptyFields as $fieldName) {
//            $_SESSION['register']['errors'][$fieldName] = "the field '$fieldName'  empty";
//
//
//        }
//        $_SESSION['register']['fields'] = $fields;
//        redirect_home("register");
//
//
//    }
//    $result = true
//}
//function password_validaation(string $password):bool
//{
//    $result = true;
//    if (strlen($password) < 8) {
//
//    }
//    return $result;
//
//}