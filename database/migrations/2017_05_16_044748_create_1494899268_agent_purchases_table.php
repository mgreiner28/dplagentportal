<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1494899268AgentPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('agent_purchases')) {
            Schema::create('agent_purchases', function (Blueprint $table) {
                $table->increments('id');
                $table->string('file_number')->nullable();
                $table->string('property')->nullable();
                $table->string('city_town_village')->nullable();
                $table->string('county')->nullable();
                $table->string('seller')->nullable();
                $table->string('seller_attorney')->nullable();
                $table->string('bank_attorney')->nullable();
                $table->string('rep_agmt')->nullable();
                $table->string('approval_letter')->nullable();
                $table->string('seller_approval_letter')->nullable();
                $table->string('search_update_received')->nullable();
                $table->string('survey_update_received')->nullable();
                $table->string('tax_receipts')->nullable();
                $table->string('sewer')->nullable();
                $table->string('pina')->nullable();
                $table->string('proposed_deed_received')->nullable();
                $table->string('mortgage_commitment')->nullable();
                $table->string('mc')->nullable();
                $table->string('survey_taxes')->nullable();
                $table->string('ordered_title_insurance')->nullable();
                $table->string('title_report_to_seller')->nullable();
                $table->string('title_report_to_bank')->nullable();
                $table->string('hoi_binder')->nullable();
                $table->string('hoi_binder_receipt_to_bank')->nullable();
                $table->string('closing_statement_received')->nullable();
                $table->string('closing_statement_to_bank')->nullable();
                $table->string('closing_date')->nullable();
                $table->string('notes')->nullable();
                $table->integer('agent_id')->unsigned()->nullable();
                $table->foreign('agent_id', '37004_591a5a44ad4f2')->references('id')->on('users')->onDelete('cascade');
                $table->integer('created_by_id')->unsigned()->nullable();
                $table->foreign('created_by_id', '37004_591a5a44b0ec9')->references('id')->on('users')->onDelete('cascade');
                
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
        Schema::dropIfExists('agent_purchases');
    }
}
