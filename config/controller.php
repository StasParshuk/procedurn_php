<?php
$type = filter_input(INPUT_POST, 'type');
unset($_POST['type']);

switch ($type) {
    case 'buy':
        buy(get_buy_params());
        break;
    case 'register':
        register(get_register_params());

        break;
    case 'login':
        login(get_login_params());

        break;
    default:
        redirect_home();
}
function get_buy_params(): array
{
    $args = [
        'product_id' => FILTER_VALIDATE_INT,
        'quantity' => FILTER_VALIDATE_INT,
        'additions' => [
            'filter' => FILTER_VALIDATE_INT,
            'flags' => FILTER_REQUIRE_ARRAY
        ],
        'additions_qnty' => [
            'Filter' => FILTER_VALIDATE_INT,
            'flags' => FILTER_REQUIRE_ARRAY
        ]
    ];
    return filter_input_array(INPUT_POST, $args);

}

function get_register_params(): array
{
    $args = [
        'email' => FILTER_VALIDATE_EMAIL,
        'password' => [
            'Filter' => FILTER_CALLBACK,
            'options' => fn($value) => is_string($value) ? $value : null
        ],
        'name' => [
            'Filter' => FILTER_CALLBACK,
            'options' => fn($value) => is_string($value) ? $value : null
        ],
        'surname' => [
            'Filter' => FILTER_CALLBACK,
            'options' => fn($value) => is_string($value) ? $value : null
        ]
    ];
    return filter_input_array(INPUT_POST, $args);

}

function get_login_params(): array
{
    $args = [
        'email' => FILTER_VALIDATE_EMAIL,
        'password' => [
            'Filter' => FILTER_CALLBACK,
            'options' => fn($value) => is_string($value) ? $value : null
        ]];
    return filter_input_array(INPUT_POST, $args);

}