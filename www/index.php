<?php
require "vendor/autoload.php";
require "App/config.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => DB_HOST,
    'port' => DB_PORT,
    'database' => DB_NAME,
    'username' => DB_USER,
    'password' => DB_PASSWORD,
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
]);

$capsule->bootEloquent();
$capsule->setAsGlobal();

$app = new \Slim\App();

$app->get('/create', function(){
    $widget = new \MyProject\Model\Widget();
    $widget->serial_number = 123;
    $widget->name = 'My Test Widget';
    $widget->save();
    echo 'Created!';
});