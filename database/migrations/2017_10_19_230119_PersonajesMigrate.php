
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonajesMigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personajes', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('nombre');
            
            $table->integer('tipopersonajes_id')->unsigned();

            $table->foreign('tipopersonajes_id')->references('id')->on('tipopersonajes');
                        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personajes');
    }
}
