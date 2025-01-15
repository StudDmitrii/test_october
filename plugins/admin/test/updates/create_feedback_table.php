<?php namespace Admin\Test\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateFeedbackTable extends Migration
{
    public function up()
    {
        Schema::create('admin_test_feedback', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('contact_id');
            $table->string('email', 200);
            $table->string('name', 40);
            $table->text('text');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_test_feedback');
    }
}
