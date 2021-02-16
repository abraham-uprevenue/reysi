<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->integer('CUSTOMER_ID')->unsigned();
            $table->string('IDCli')->nullable();
            $table->string('CCli')->nullable();
            $table->string('NCli')->nullable();
            $table->integer('Ruta')->nullable();
            $table->string('Origen')->nullable();
            $table->decimal('Saldo', 10, 2);
            $table->decimal('SaldoVen', 10, 2);
            $table->string('FechaUltAbo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            //
        });
    }
}
