<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


return new class extends Migration
{
   /**
    * Run the migrations.
    */
   public function up(): void
   {
       Schema::create('mahasiswas', function (Blueprint $table) {
           $table->id();
           $table->string('NIM')->unique();
           $table->string('nama');
           $table->string('jurusan');
           $table->string('prodi');
           $table->string('alamat');
           $table->string('ttl');
           $table->string('no_hp');
           $table->timestamps();
       });
   }


   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
       Schema::dropIfExists('mahasiswas');
   }
};