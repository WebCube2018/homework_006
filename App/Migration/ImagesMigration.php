<?php
namespace App\Migration;

use Illuminate\Database\Schema\Blueprint;

class ImagesMigration extends Migration
{
    public function up()
    {
        $this->schema->create(
            "images",
            function (Blueprint $table) {
                $table->increments("id");
                $table->string("url_images");
                $table->timestamps();
            }
        );
    }
    public function down()
    {
        $this->schema->drop("images");
    }
}