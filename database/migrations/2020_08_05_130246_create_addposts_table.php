<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addposts', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("description",3000);
            $table->string("author");
            $table->string("pic1")->nullable();
            $table->string("pic2")->nullable();
            $table->string("pic3")->nullable();
            $table->string("pic4")->nullable();
            $table->string("pic5")->nullable();

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
        Schema::dropIfExists('addposts');
    }
}
