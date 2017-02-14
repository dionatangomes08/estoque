<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id_registro');
            $table->unsignedInteger('id_user');
            $table->dateTime('abertura'); //data de abertura
            $table->dateTime('fechamento'); //data de fechamento
            $table->unsignedInteger('protocolo'); 
            $table->string('nome_ponto',45); //nome do ponto com problema
            $table->string('responsavel',45); //Responsável pela abertura do atendimento. Pegará pelo login.
            $table->text('problema'); //Descrição do problema
            $table->boolean('fechado'); //verifica se o atendimento já foi finalizado.
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
        Schema::drop('registros');
    }
}
