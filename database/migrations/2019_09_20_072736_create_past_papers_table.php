<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePastPapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('past_papers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('q_paper');
            $table->string('a_paper')->nullable();

            $table->unsignedBigInteger('subject_id');

            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->integer('year');
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
        Schema::dropIfExists('past_papers');
    }
}
