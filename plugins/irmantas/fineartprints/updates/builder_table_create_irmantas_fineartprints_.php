<?php namespace Irmantas\FineArtPrints\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIrmantasFineartprints extends Migration
{
    public function up()
    {
        Schema::create('irmantas_fineartprints_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('irmantas_fineartprints_');
    }
}
