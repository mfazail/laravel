<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanquetBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banquet_books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users','id');
            $table->foreignId('banquet_id')->constrained('banquets','id');
            $table->string('name');
            $table->string('email');
            $table->text('event_detail');
            $table->bigInteger('mobile');
            $table->date('venue_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banquet_books');
    }
}
