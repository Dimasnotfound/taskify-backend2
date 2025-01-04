<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->foreignId(column: 'project_id')->after('column_id')->constrained('projects')->onDelete('cascade');
            $table->string('status', 50)->default('ready')->change();
        });

        DB::statement("ALTER TABLE tasks ADD CONSTRAINT check_status CHECK (status IN ('ready', 'on_hold', 'in_progress', 'in_review', 'done'))");
    }

    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropForeign(['project_id']);
            $table->dropColumn('project_id');
            $table->enum('status', ['pending', 'in_progress', 'done'])->default('pending')->change();
        });

        DB::statement("ALTER TABLE tasks DROP CONSTRAINT check_status");
    }
};
