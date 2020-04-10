<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelPengguna extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nama");
            $table->string("alamat");
            $table->string("kelamin");
            $table->string("e-mail");
            $table->string("foto")->nullable();
            $table->integer("user_id");
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
        Schema::dropIfExists('pengguna');
    }
}
