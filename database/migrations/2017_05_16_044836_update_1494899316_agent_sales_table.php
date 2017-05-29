<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1494899316AgentSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agent_sales', function (Blueprint $table) {
            $table->text('notes')->nullable();
                
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
            $table->dropColumn('notes');
            
        });

    }
}
