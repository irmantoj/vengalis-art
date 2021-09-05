<?php namespace Irmantas\Homepageslider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIrmantasHomepageslider extends Migration
{
    public function up()
    {
        Schema::table('irmantas_homepageslider_', function($table)
        {
            $table->integer('position');
            $table->text('name')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('irmantas_homepageslider_', function($table)
        {
            $table->dropColumn('position');
            $table->text('name')->default('NULL')->change();
        });
    }
}
