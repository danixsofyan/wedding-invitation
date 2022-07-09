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
        Schema::create('brides', function (Blueprint $table) {
            $table->id();
            $table->integer('id_wedding');
            $table->string('name');
            $table->string('name_father');
            $table->string('name_mother');
            $table->string('instagram');
            $table->integer('id_bank');
            $table->string('acc_name');
            $table->bigInteger('acc_number');
            $table->enum('gender', ['Male', 'Female']);
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
        Schema::dropIfExists('brides');
    }
};
