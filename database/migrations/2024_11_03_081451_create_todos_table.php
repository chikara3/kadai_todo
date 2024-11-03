<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // タイトル
            $table->boolean('completed')->default(false); // 完了フラグ
            $table->timestamps(); // created_at と updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('todos');
    }
}
