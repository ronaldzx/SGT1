<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'unidad';

    /**
     * Run the migrations.
     * @table unidad
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre', 45)->nullable()->default(null);
            $table->integer('socio_id')->nullable()->default(null)->unsigned();
            $table->string('placa', 45)->nullable()->default(null);
            $table->string('modelo', 45)->nullable()->default(null);
            $table->string('marca', 45)->nullable()->default(null);
            $table->date('soat_vence')->nullable()->default(null);
            $table->string('estado', 45)->nullable()->default(null);

            $table->index(["socio_id"], 'fk_unidad_socio_id_idx');


            $table->foreign('socio_id', 'fk_unidad_socio_id_idx')
                ->references('id')->on('socio')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
