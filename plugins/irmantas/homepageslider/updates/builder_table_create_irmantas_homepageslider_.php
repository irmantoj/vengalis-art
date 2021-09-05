<?php namespace Irmantas\Homepageslider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIrmantasHomepageslider extends Migration
{
    public function up()
    {
        Schema::create('irmantas_homepageslider_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->text('name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('irmantas_homepageslider_');
    }
}
