<?php
const DB_HOST = "localhost";
const DB_NAME = "stas";
const DB_CHARSET = "utf8";
const DB_USER = "root";
CONST DB_PASSWORD = "";
const DB_DSN = "mysql:host=" . DB_HOST .";dbname=" . DB_NAME .";charset=". DB_CHARSET ;

const PARTS_DIR = ROOT_DIR . "/parts";
define("ASSETS_URI", $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/last/assets/');
