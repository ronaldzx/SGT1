<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'ticket';

    /**
     * Run the migrations.
     * @table ticket
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('codigo', 45)->nullable()->default(null);
            $table->integer('unidad_id')->nullable()->default(null)->unsigned();
            $table->integer('conductor_id')->nullable()->default(null)->unsigned();
            $table->integer('ruta_id')->nullable()->default(null)->unsigned();
            $table->timestamp('fecha_salida')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('fecha_llegada')->nullable()->default(null);
            $table->integer('estado_id')->nullable()->default(null)->unsigned();
            $table->decimal('pago', 5, 2)->nullable()->default(null);

            $table->index(["estado_id"], 'fk_ticket_estado_id_idx');

            $table->index(["conductor_id"], 'fk_ticket_conductor_id_idx');

            $table->index(["unidad_id"], 'fk_ticket_unidad_id_idx');

            $table->index(["ruta_id"], 'fk_ticket_ruta_id_idx');


            $table->foreign('conductor_id', 'fk_ticket_conductor_id_idx')
                ->references('id')->on('conductor')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('estado_id', 'fk_ticket_estado_id_idx')
                ->references('id')->on('estado')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('ruta_id', 'fk_ticket_ruta_id_idx')
                ->references('id')->on('ruta')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('unidad_id', 'fk_ticket_unidad_id_idx')
                ->references('id')->on('unidad')
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
