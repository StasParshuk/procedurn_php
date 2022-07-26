<?php
const ROOT_DIR = __DIR__;
require_once __DIR__ . '/config/0.config.php';

//require_once __DIR__ . '/assets/0.assets.php';
if (!session_id()){
    session_start();

}


if(!empty($_POST)) {
    require __DIR__ . '/config/controller.php';

unset($_POST);
} else{

    require_once PARTS_DIR . '/1head.php';
    require_once PARTS_DIR . '/notification.php';
    require_once PARTS_DIR . '/2navbar.php';


    require_once __DIR__ . '/config/routes.php';






    require_once PARTS_DIR . '/9footer.php';

    require_once PARTS_DIR . '/modals.php';
}


