<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financeiros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo')->unsigned()->default(0);
            $table->foreign('codigo')->references('id')->on('estados');
            $table->longText('descricao');
            $table->date('dataEmissao');
            $table->string('atribuicao');
            $table->float('emolumentos');
            $table->float('fdj');
            $table->float('frmp');
            $table->float('fcrcpn');
            $table->float('valor');
            $table->boolean('tipo');
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
        Schema::drop('financeiros');
    }
}
