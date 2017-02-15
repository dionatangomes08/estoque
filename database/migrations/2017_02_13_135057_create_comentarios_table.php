<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_registro');
            $table->unsignedInteger('id_user');
            $table->string('responsavel',45); //Responsável pelo comentário . Pegará pelo login.
            $table->dateTime('hora_comentario'); //Horario do registro do comentário
            $table->text('new_coment'); //Comentário
            $table->rememberToken();
            $table->timestamps();
            $table->softdeletes();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comentarios');
    }
}
