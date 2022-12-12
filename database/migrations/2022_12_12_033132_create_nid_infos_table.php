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
        Schema::create('nid_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('b_name');
            $table->string('gender');
            $table->string('f_name');
            $table->string('m_name');
            $table->string('spouse')->nullable();
            $table->string('image');
            $table->date('date_of_birth');
            $table->bigInteger('nid');
            $table->bigInteger('pin');
            $table->string('occupation');
            $table->string('blood_group');
            $table->longText('present_address');
            $table->longText('permanent_address');
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
        Schema::dropIfExists('nid_infos');
    }
};
