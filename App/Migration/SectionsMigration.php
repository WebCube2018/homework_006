<?php
namespace App\Migration;

use Illuminate\Database\Schema\Blueprint;

class SectionsMigration extends Migration
{
    public function up()
    {
        $this->schema->create(
            "sections",
            function (Blueprint $table) {
                $table->increments("id");
                $table->string("name_section");
                $table->timestamps();
            }
        );
    }
    public function down()
    {
        $this->schema->drop("section");
    }
}
