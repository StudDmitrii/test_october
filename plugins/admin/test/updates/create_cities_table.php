<?php namespace Admin\Test\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCitiesTable extends Migration
{
    public function up()
    {
        Schema::create('admin_test_cities', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 40)->unique();
            $table->string('domain', 40)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_test_cities');
    }
}
