<?php namespace Admin\Test\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('admin_test_contacts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('city_id');
            $table->string('phone', 40);
            $table->string('address', 200);
            $table->string('mail', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_test_contacts');
    }
}
