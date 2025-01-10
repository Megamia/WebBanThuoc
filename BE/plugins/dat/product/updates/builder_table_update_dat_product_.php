<?php namespace Dat\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDatProduct extends Migration
{
    public function up()
    {
        Schema::table('dat_product_', function($table)
        {
            $table->renameColumn('descriptions', 'description');
        });
    }
    
    public function down()
    {
        Schema::table('dat_product_', function($table)
        {
            $table->renameColumn('description', 'descriptions');
        });
    }
}
