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
            $table->increments('id');
            $table->string('post_id', 8);
            $table->integer('comment_id');
            $table->timestamp('create_time');
            $table->timestamp('update_time');
            $table->string('author', 32);
            $table->text('comment');


            $table->index(['post_id', 'comment_id']);
            $table->unique(['post_id', 'comment_id']);
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
