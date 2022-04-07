<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kotas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kota');
            $table->string('foto');
        });

        DB::table('kotas')->insert([
            ['nama_kota' => 'Makassar', 'foto' => '/makassar.jpg'],
            ['nama_kota' => 'Tana Toraja', 'foto' => '/toraja.jpg'],
            ['nama_kota' => 'Bulukumba', 'foto' => '/bulukumba.jpg'],
            ['nama_kota' => 'Parepare', 'foto' => '/parepare.jpg'],
            ['nama_kota' => 'Kab Maros', 'foto' => '/maros.jpg'],
            ['nama_kota' => 'Jeneponto', 'foto' => '/jeneponto.jpg'],
            ['nama_kota' => 'Pangkajene', 'foto' => '/pangkep.jpg'],
            ['nama_kota' => 'Kab Bone', 'foto' => '/bone.png'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kotas');
    }
};
