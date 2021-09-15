<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QuoteTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Соединительная таблица многие ко многим
        Schema::create('quote_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tag_id'); //Foreign key на таблицу тэгов
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->unsignedBigInteger('quote_id');//Foreign key на цитаты
            $table->foreign('quote_id')->references('id')->on('quotes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
