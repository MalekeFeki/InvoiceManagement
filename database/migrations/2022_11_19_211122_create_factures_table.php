<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_facture', 50);
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();
            $table->string('product', 50);
            $table->bigInteger( 'categorie_id' )->unsigned();
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->date('Payment_Date')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('factures');
    }
};