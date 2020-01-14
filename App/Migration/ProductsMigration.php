<?php
namespace App\Migration;

use Illuminate\Database\Schema\Blueprint;

class ProductsMigration extends Migration
{
    public function up()
    {
        $this->schema->create(
            "products",
            function (Blueprint $table) {
                $table->increments("id");
                $table->integer("section_id_product");
                $table->string("name_product");
                $table->string("description_product");
                $table->integer("price_product");
                $table->integer("count_warehouse_product");
                $table->integer("id_img_product");
                $table->timestamps();
            }
        );
    }
    public function down()
    {
        $this->schema->drop("product");
    }
}
