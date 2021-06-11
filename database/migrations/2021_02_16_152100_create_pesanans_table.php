<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('speedboat_id');
            $table->foreign('speedboat_id')->references('id')->on('speedboats')->onUpdate('cascade')->onDelete('cascade');
            $table->text('bukti_transfer');
            $table->timestamps();
            $table->enum('status_tiket',['dibuka','ditutup'])->default('ditutup');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
}
