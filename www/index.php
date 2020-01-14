<?php
require "vendor/autoload.php";
require "App/config.php";

use Illuminate\Database\Capsule\Manager as Capsule;

//Временный файл на будущие если захотим создовать данные из модели
$capsule = new Capsule;
$capsule->addConnection([
    "driver" => "mysql",
    "host" => DB_HOST,
    "port" => DB_PORT,
    "database" => DB_NAME,
    "username" => DB_USER,
    "password" => DB_PASSWORD,
    "charset" => "utf8",
    "collation" => "utf8_unicode_ci",
]);

$capsule->bootEloquent();
$capsule->setAsGlobal();
