<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 40);
            $table->string('email', 30)->nullable();
            $table->string('tel_celular', 40);
            $table->string('tel_residencial', 40)->nullable();
            $table->string('cep',8)->nullable();
            $table->string('rua', 40)->nullable();
            $table->string('bairro', 30)->nullable();
            $table->string('estado', 20)->nullable();
            $table->string('thumbnail', 60)->nullable();
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
        //
    }
}
