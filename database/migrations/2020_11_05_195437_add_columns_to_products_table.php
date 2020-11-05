<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('name');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->decimal('price')->nullable();
            $table->string('product_categories_id')->nullable();
            $table->text('description')->nullable();
            $table->integer('inventory')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('slug');
            $table->dropColumn('image');
            $table->dropColumn('price');
            $table->dropColumn('product_categories_id');
            $table->dropColumn('description');
            $table->dropColumn('inventory');
        });
    }
}
