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
            $table->string('ketegori');
            $table->string('merk');
            $table->string('jenis');
            $table->string('plat _no');
            $table->string('helm');
            $table->string('knalpot');
            $table->string('spion');
            $table->string('plat');
            $table->string('sim');
            $table->string('exp_sim');
            $table->string('stnk');
            $table->string('exp_stnk');
            $table->string('eticker');
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
