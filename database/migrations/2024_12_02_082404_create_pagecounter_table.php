<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('pagecounter', function (Blueprint $table) {
            $table->id(); // Kolom ID sebagai Primary Key
            $table->integer('jumlah')->default(0); // Kolom untuk jumlah pengunjung
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() {
        Schema::dropIfExists('pagecounter');
    }
};
