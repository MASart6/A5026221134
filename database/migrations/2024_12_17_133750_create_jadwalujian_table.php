<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('jadwalujian', function (Blueprint $table) {
            $table->id();
            $table->date('tanggalujian');
            $table->string('jammulai');
            $table->string('namamatakuliah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Schema::table('jadwalujian', function (Blueprint $table) {
        //     $table->dropColumn(['tanggalujian', 'jammulai', 'namamatakuliah']);
        // });
        Schema::dropIfExists('pagecounter');
    }
};
