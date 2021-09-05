<?php namespace Irmantas\Homepageslider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIrmantasHomepageslider2 extends Migration
{
    public function up()
    {
        Schema::table('irmantas_homepageslider_', function($table)
        {
            $table->text('name')->default('null')->change();
            $table->integer('position')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('irmantas_homepageslider_', function($table)
        {
            $table->text('name')->default('NULL')->change();
            $table->integer('position')->nullable(false)->change();
        });
    }
}
