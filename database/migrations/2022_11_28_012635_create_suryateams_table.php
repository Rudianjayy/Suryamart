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
        Schema::create('suryateams', function (Blueprint $table) {
            $table->id();
            $table->string('foto_team');
            $table->string('jabatan');
            $table->string('nama_team');
            $table->string('link_fb')->nullable();
            $table->string('link_wa')->nullable();
            $table->string('link_ig')->nullable();
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
        Schema::dropIfExists('suryateams');
    }
};
