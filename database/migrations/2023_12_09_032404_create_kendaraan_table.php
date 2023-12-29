<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('dept');
            $table->string('kategori');
            $table->string('merk');
            $table->string('jenis');
            $table->string('no_plat');
            $table->string('helm');
            $table->string('knalpot');
            $table->string('spion');
            $table->string('plat');
            $table->string('sim');
            $table->dateTime('exp_sim');
            $table->string('stnk');
            $table->dateTime('exp_stnk');
            $table->string('sticker');
            $table->string('status');
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
        Schema::dropIfExists('kendaraan');
    }
}
