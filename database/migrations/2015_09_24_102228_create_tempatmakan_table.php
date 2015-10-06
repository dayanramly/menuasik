<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempatmakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
      Schema::create('tempatmakan', function($table)
      {
       $table->engine = "InnoDB";
       $table->increments('id');
       $table->string('nama');
       $table->string('alamat');
       $table->text('deskripsi');
       $table->integer('tipe');
       $table->text('keunggulan');
       $table->text('menu');
       $table->text('foto');
       $table->text('kontak');
       $table->text('socmed');
       $table->integer('user_id')->unsigned();
     });

      Schema::table('tempatmakan', function(Blueprint $table)
      {
        $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
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
