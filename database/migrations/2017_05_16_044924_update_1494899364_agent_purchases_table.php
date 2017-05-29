<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1494899364AgentPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agent_purchases', function (Blueprint $table) {
            if(Schema::hasColumn('agent_purchases', 'notes')) {
                $table->dropColumn('notes');
            }
            
        });
Schema::table('agent_purchases', function (Blueprint $table) {
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
        Schema::table('agent_purchases', function (Blueprint $table) {
            $table->dropColumn('notes');
            
        });
Schema::table('agent_purchases', function (Blueprint $table) {
                        $table->string('notes')->nullable();
                
        });

    }
}
