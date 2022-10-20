<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('tb_tipos', function (Blueprint $table){
        $table->bigincrements('id_tipo');
        $table->string('nombre', 30);
        $table->string('detalle', 50);
        $table->boolean('activo');
        $table->datetime('updated_at');
        $table->datetime('created_at');

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
};
