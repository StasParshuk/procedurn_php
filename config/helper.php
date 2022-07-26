<?php
function redirect_home($pag = "")
{
    header('location:' . $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . $pag);

}
function alert(string $class,string $text) {
    $_SESSION["alert"] = [
      'class' => $class,
        'text' => $text
    ];
}
function emptyFields(array $fields, $key)
{
    $result = false;
    $emptyFields = array_keys($fields, null);

    if (!empty($emptyFields)) {
        foreach ($emptyFields as $fieldName) {
            $_SESSION[$key]['errors'][$fieldName] = "The field '{$fieldName}' has wrong value!";
        }
        $result = true;
    }

    return $result;
}
