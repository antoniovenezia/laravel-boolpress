<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*NOMI COLONNE TABELLA
    -nameSocial
    -category
    -user
    -date
    -picture
    -desciption
    */

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->char('name_social', 50);
            $table->char('category', 20);
            $table->char('user', 50);
            $table->date('date');
            $table->text('picture');
            $table->text('description');
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
        Schema::dropIfExists('posts');
    }
}
