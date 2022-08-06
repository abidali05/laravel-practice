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
        Schema::create('childinfos', function (Blueprint $table) {
            $table->id();
            $table->string('army_no');
            $table->string('child_name');
            $table->string('child_dob');
            $table->string('child_age');
            $table->string('child_blood');
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
        Schema::dropIfExists('childinfos');
    }
};
