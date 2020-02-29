<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            //bigIncrementsは1つのテーブルに1つだけしか使えない。
            $table->timestamps();
            //$table->timestamps();は created_at と updated_at を作成するメソッド
            $table->string('title',30);
            $table->string('contents',140)->nullable();
            $table->text('image_at')->nullable();
            $table->bigInteger('user_id')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
