<?php namespace Irmantas\FineArtPrints\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIrmantasFineartprints2 extends Migration
{
    public function up()
    {
        Schema::table('irmantas_fineartprints_', function($table)
        {
            $table->string('name', 191)->default('null')->change();
            $table->text('description')->default('null')->change();
            $table->string('size', 191)->default('null')->change();
            $table->dropColumn('price');
        });
    }
    
    public function down()
    {
        Schema::table('irmantas_fineartprints_', function($table)
        {
            $table->string('name', 191)->default('\'null\'')->change();
            $table->text('description')->default('NULL')->change();
            $table->string('size', 191)->default('NULL')->change();
            $table->decimal('price', 10, 0)->nullable()->default(NULL);
        });
    }
}
