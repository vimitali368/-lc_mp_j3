<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeIndexDemandFpnCdxToDemandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demands', function (Blueprint $table) {
            $table->dropUnique('demand_fpn_cdx');
            $table->unique(['fio', 'phone_number', 'status'], 'demand_fpn_cdx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('demands', function (Blueprint $table) {
            $table->dropUnique('demand_fpn_cdx');
            $table->unique(['fio', 'phone_number'], 'demand_fpn_cdx');
        });
    }
}
