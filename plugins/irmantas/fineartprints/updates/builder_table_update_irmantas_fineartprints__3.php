<?php namespace Irmantas\FineArtPrints\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIrmantasFineartprints3 extends Migration
{
    public function up()
    {
        Schema::table('irmantas_fineartprints_', function($table)
        {
            $table->double('price', 10, 0)->nullable();
            $table->string('name', 191)->default('null')->change();
            $table->text('description')->default('null')->change();
            $table->string('size', 191)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('irmantas_fineartprints_', function($table)
        {
            $table->dropColumn('price');
            $table->string('name', 191)->default('\'null\'')->change();
            $table->text('description')->default('NULL')->change();
            $table->string('size', 191)->default('\'null\'')->change();
        });
    }
}
