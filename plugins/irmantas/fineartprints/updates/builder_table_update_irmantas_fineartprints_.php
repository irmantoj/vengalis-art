<?php namespace Irmantas\FineArtPrints\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIrmantasFineartprints extends Migration
{
    public function up()
    {
        Schema::table('irmantas_fineartprints_', function($table)
        {
            $table->string('size')->nullable();
            $table->decimal('price', 10, 0)->nullable();
            $table->string('name', 191)->default('null')->change();
            $table->text('description')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('irmantas_fineartprints_', function($table)
        {
            $table->dropColumn('size');
            $table->dropColumn('price');
            $table->string('name', 191)->default('NULL')->change();
            $table->text('description')->nullable(false)->change();
        });
    }
}
