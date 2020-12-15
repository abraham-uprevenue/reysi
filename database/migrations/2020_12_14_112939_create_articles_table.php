<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // {\"ID_CART\":26,\"CART\":\"F-01\",\"NART\":\"EDREDON CON CORTINAS\",\"CATEGORIA\":\"BLANCOS\",\"MARCA\":\"MIAMI\",\"MODELO\":null,\"COLOR\":null,\"MEDIDAS\":\"MATRIMONIAL\",\"PRECIOA\":null,\"PRECIOB\":null,\"PRECIOC\":null,\"PRECIOD\":null,\"PRECIOE\":null,\"PRECIOF\":null,\"EXTENCION\":\"jpg\",\"PROV\":1,\"FAB\":0,\"PROMO\":0,\"PMES\":0,\"IDAct\":1}
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->integer('ID_CART')->unsigned();
            $table->string('CART')->nullable();
            $table->string('NART')->nullable();
            $table->string('CATEGORIA')->nullable();
            $table->string('MARCA')->nullable();
            $table->string('MODELO')->nullable();
            $table->string('PRECIOA')->nullable();
            $table->string('PRECIOB')->nullable();
            $table->string('PRECIOC')->nullable();
            $table->string('PRECIOD')->nullable();
            $table->string('PRECIOE')->nullable();
            $table->string('PRECIOF')->nullable();
            $table->string('EXTENCION')->nullable();
            $table->integer('PROV')->unsigned();
            $table->integer('FAB')->unsigned();
            $table->integer('PROMO')->unsiged();
            $table->integer('PMES')->unsiged();
            $table->integer('IDAct')->unsiged();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
