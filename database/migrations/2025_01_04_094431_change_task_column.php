<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::rename('columns', 'user_story_tasks');
        Schema::table('tasks', function (Blueprint $table) {
            $table->renameColumn('column_id', 'user_story_task_id');
            $table->foreign('user_story_task_id')->references('id')->on('user_story_tasks')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::rename('user_story_tasks', 'columns');

        Schema::table('tasks', function (Blueprint $table) {
            $table->dropForeign(['user_story_task_id']);
            $table->renameColumn('user_story_task_id', 'column_id');
        });
    }
};
