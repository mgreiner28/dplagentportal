<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1494891846AgentSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agent_sales', function (Blueprint $table) {
            $table->integer('agent_id')->unsigned()->nullable();
                $table->foreign('agent_id', '37000_591a3d458b427')->references('id')->on('users')->onDelete('cascade');
                
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agent_sales', function (Blueprint $table) {
            $table->dropForeign('37000_591a3d458b427');
            $table->dropIndex('37000_591a3d458b427');
            $table->dropColumn('agent_id');
            
        });

    }
}
