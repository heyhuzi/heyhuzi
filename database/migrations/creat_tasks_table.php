<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migration;

/**
 * create task table
 */
class CreateTasksTable extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            $table->string('due');
            $table->string('tags');
            $table->string('attachments');
            $table->string('workflow');
            $table->string('status');
            $table->string('subtasks');
            $table->string('project');
            $table->string('creator');
            $table->string('owner');
            $table->string('followers');
            $table->timestamp('update_at');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Sehema::dropIfExists('tasks');
    }
}
