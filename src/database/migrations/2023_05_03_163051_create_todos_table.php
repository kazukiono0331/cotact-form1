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
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();   //外部IDcategory_idを設定,constrained()
            //laravelの規約に則り、自動でテーブルを紐づけてくれる,cascadeOnDelete()	参照先のidが削除された時に、その外部idを持つレコードも削除される
            $table->string('content',20);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('todos');
    }
}
