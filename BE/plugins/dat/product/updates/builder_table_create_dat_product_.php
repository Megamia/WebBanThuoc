<?php namespace Dat\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDatProduct extends Migration
{
    public function up()
    {
        Schema::create('dat_product_', function($table)
        {
            $table->increments('id');
            $table->text('name');
            $table->string('price');
            $table->text('descriptions');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dat_product_');
    }
}
