<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(){
        Schema::create('buku', function (Blueprint $table) {
            $table->id('kodebuku'); // Primary key
            $table->string('merkbuku', 30); // Nama merk buku
            $table->integer('stockbuku'); // Stok buku
            $table->char('tersedia', 1); // Status tersedia (Y/N)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
