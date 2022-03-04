<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demands', function (Blueprint $table) {
            $table->id();
            $table->string('fio');
            $table->string('phone_number');
            $table->string('location');
            $table->string('email');
            $table->dateTime('suitable_time');

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['fio', 'phone_number'], 'demand_fpn_cdx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demands');
    }
}
