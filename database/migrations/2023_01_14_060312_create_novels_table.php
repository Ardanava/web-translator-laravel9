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
        Schema::create('novels', function (Blueprint $table) {
            $table->id();
            $table->string('judul_novel');
            $table->string('penulis');
            $table->string('penerbit');
            $table->string('tipe');
            $table->string('sampul_novel');
            $table->string('status');
            $table->string('genre');
            $table->string('Action');
            $table->string('kerjasama');
            $table->string('Sinopsis');
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
        Schema::dropIfExists('novels');
    }
};
