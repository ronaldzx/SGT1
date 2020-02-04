<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConductorPenalidadTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'conductor_penalidad';

    /**
     * Run the migrations.
     * @table conductor_penalidad
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('conductor_id')->nullable()->default(null)->unsigned();
            $table->integer('penalidad_id')->nullable()->default(null)->unsigned();
            $table->decimal('penalidad_monto', 5, 2)->nullable()->default(null);

            $table->index(["conductor_id"], 'fk_conductorpenalidad_conductor_id_idx');

            $table->index(["penalidad_id"], 'fk_conductorpenalidad_penalidad_id_idx');


            $table->foreign('conductor_id', 'fk_conductorpenalidad_conductor_id_idx')
                ->references('id')->on('conductor')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('penalidad_id', 'fk_conductorpenalidad_penalidad_id_idx')
                ->references('id')->on('penalidad')
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
