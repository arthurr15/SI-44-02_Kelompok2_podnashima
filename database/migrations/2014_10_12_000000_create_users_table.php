<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('isAdmin')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }
/*
pesanan :
id, user_id, tanggal keberangkatan, titik_berangkat, titik_tujuan, Kelas Kursi, Jumlah dewasa, Jumlah infant, harga
kode lokasi :
id, id_kota, kota, id_daerah, daerah, titik
*/
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
