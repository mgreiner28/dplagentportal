<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1494891793AgentSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('agent_sales')) {
            Schema::create('agent_sales', function (Blueprint $table) {
                $table->increments('id');
                $table->string('file_number')->nullable();
                $table->string('client')->nullable();
                $table->string('property')->nullable();
                $table->string('city_town_village')->nullable();
                $table->string('county')->nullable();
                $table->string('buyer')->nullable();
                $table->string('buyer_attorney')->nullable();
                $table->string('rep_agmt')->nullable();
                $table->string('approval_letter')->nullable();
                $table->string('search_update')->nullable();
                $table->string('survey_update')->nullable();
                $table->string('tax_receipts')->nullable();
                $table->string('sewer_water_compliance')->nullable();
                $table->string('proposed_deed')->nullable();
                $table->string('mortgage_commitment')->nullable();
                $table->string('seach')->nullable();
                $table->string('mortgage_payoff_info')->nullable();
                $table->string('title_report_from_buyer')->nullable();
                $table->string('closing_docs_drafted')->nullable();
                $table->string('closing_statement')->nullable();
                $table->string('closing_statement_to_buyer')->nullable();
                $table->string('closing_date')->nullable();
                $table->integer('created_by_id')->unsigned()->nullable();
                $table->foreign('created_by_id', '37000_591a3d114cfe7')->references('id')->on('users')->onDelete('cascade');
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agent_sales');
    }
}
