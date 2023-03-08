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
        Schema::create('keluarga', function (Blueprint $table) {
            $table->string('no', 15)->primary();
            $table->string('nama', 30);
            $table->string('status', 30);
            $table->char('jenis_kelamin', 1)->default('P');
            $table->date('tangga_lahir');
            $table->string('agama',15);
            $table->string('pekerjaan', 50);
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
        Schema::dropIfExists('keluarga');
    }
};
