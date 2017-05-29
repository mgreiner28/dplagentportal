<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\FilterByUser;

/**
 * Class AgentPurchase
 *
 * @package App
 * @property string $file_number
 * @property string $property
 * @property string $city_town_village
 * @property string $county
 * @property string $seller
 * @property string $seller_attorney
 * @property string $bank_attorney
 * @property string $rep_agmt
 * @property string $approval_letter
 * @property string $seller_approval_letter
 * @property string $search_update_received
 * @property string $survey_update_received
 * @property string $tax_receipts
 * @property string $sewer
 * @property string $pina
 * @property string $proposed_deed_received
 * @property string $mortgage_commitment
 * @property string $mc
 * @property string $survey_taxes
 * @property string $ordered_title_insurance
 * @property string $title_report_to_seller
 * @property string $title_report_to_bank
 * @property string $hoi_binder
 * @property string $hoi_binder_receipt_to_bank
 * @property string $closing_statement_received
 * @property string $closing_statement_to_bank
 * @property string $closing_date
 * @property text $notes
 * @property string $agent
*/
class AgentPurchase extends Model
{
    use SoftDeletes, FilterByUser;

    protected $fillable = ['file_number', 'property', 'city_town_village', 'county', 'seller', 'seller_attorney', 'bank_attorney', 'rep_agmt', 'approval_letter', 'seller_approval_letter', 'search_update_received', 'survey_update_received', 'tax_receipts', 'sewer', 'pina', 'proposed_deed_received', 'mortgage_commitment', 'mc', 'survey_taxes', 'ordered_title_insurance', 'title_report_to_seller', 'title_report_to_bank', 'hoi_binder', 'hoi_binder_receipt_to_bank', 'closing_statement_received', 'closing_statement_to_bank', 'closing_date', 'notes', 'agent_id'];
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setAgentIdAttribute($input)
    {
        $this->attributes['agent_id'] = $input ? $input : null;
    }
    
    public function agent()
    {
        return $this->belongsTo(User::class, 'agent_id');
    }
    
}
