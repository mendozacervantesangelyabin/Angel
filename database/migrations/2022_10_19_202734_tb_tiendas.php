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
            schema::create('tb_tiendas', function (Blueprint $table){
                $table->bigincrements('id_tienda');
                $table->string('clave', 30);
                $table->string('nombre', 50);
                $table->text('foto');
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
