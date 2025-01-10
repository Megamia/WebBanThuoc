<?php namespace Dat\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDatProduct2 extends Migration
{
    public function up()
    {
        Schema::table('dat_product_', function($table)
        {
            $table->text('type');
            $table->integer('quantity');
            $table->integer('volum');
        });
    }
    
    public function down()
    {
        Schema::table('dat_product_', function($table)
        {
            $table->dropColumn('type');
            $table->dropColumn('quantity');
            $table->dropColumn('volum');
        });
    }
}
