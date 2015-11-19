<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tabela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tabelas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('codigo');
            $table->longText('descricao');
            $table->string('atribuicao');
            $table->float('emolumentos');
            $table->float('fdj');
            $table->float('frmp');
            $table->float('fcrcpn');
            $table->timestamps();
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tabelas');
    }
}
