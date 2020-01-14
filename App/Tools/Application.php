<?php
namespace App\Tools;

use App\Model\Products;

class Application
{
    protected $app;

    public function index()
    {
        $this->app = new \Slim\App();

        $this->app->get('/create/product', function () {
            $product = new Products();
            $product->section_id_product = 123;
            $product->name_product = 'Мой первый тестовый товар';
            $product->description_product = 'Описание для товара';
            $product->price_product = 1999;
            $product->count_warehouse_product = 100;
            $product->count_warehouse_product = 1;
            $product->save();
            echo 'Created!';
        });

        $this->app->run();
    }
}
