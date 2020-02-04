<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpcionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'opcion';

    /**
     * Run the migrations.
     * @table opcion
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('padre_id')->nullable()->default(null)->unsigned();
            $table->string('descripcion', 100)->nullable()->default(null);
            $table->integer('orden')->nullable()->default(null);
            $table->string('url', 100)->nullable()->default(null);
            $table->integer('controlador_id')->nullable()->default(null);
            $table->string('route', 45)->nullable()->default(null);
            $table->string('icono', 45)->nullable()->default(null);
            $table->integer('estado')->nullable()->default(null);
            $table->dateTime('fecha_creacion')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->index(["padre_id"], 'fk_opcion_padre_id_idx');


            $table->foreign('padre_id', 'fk_opcion_padre_id_idx')
                ->references('id')->on('opcion')
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
