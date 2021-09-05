<?php namespace Irmantas\Originalpaintings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIrmantasOriginalpaintings extends Migration
{
    public function up()
    {
        Schema::create('irmantas_originalpaintings_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id')->unsigned();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('size')->nullable();
            $table->double('price', 10, 0)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('irmantas_originalpaintings_');
    }
}
