<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeedboatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speedboats', function (Blueprint $table) {
            $table->id();
            $table->text('nama_speedboat');
            $table->date('tanggal_berangkat');
            $table->time('jam_berangkat');
            $table->text('rute');
            $table->text('no_rekening');
            $table->integer('harga');
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
        Schema::dropIfExists('speedboats');
    }
}
