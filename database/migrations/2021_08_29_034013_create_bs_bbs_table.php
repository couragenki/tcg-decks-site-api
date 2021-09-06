<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBsBbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_bbs_table', function (Blueprint $table) {
            $table->id();
            $table->string('kiji_num', 8);
            $table->integer('number');
            $table->timestamp('create_time');
            $table->timestamp('update_time');
            $table->string('author', 32);
            $table->text('comment');


            $table->index(['kiji_num', 'number']);
            $table->unique(['kiji_num', 'number']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bs_bbs_table');
    }
}
