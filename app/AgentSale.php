<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\FilterByUser;

/**
 * Class AgentSale
 *
 * @package App
 * @property string $file_number
 * @property string $client
 * @property string $property
 * @property string $city_town_village
 * @property string $county
 * @property string $buyer
 * @property string $buyer_attorney
 * @property string $rep_agmt
 * @property string $approval_letter
 * @property string $search_update
 * @property string $survey_update
 * @property string $tax_receipts
 * @property string $sewer_water_compliance
 * @property string $proposed_deed
 * @property string $mortgage_commitment
 * @property string $seach
 * @property string $mortgage_payoff_info
 * @property string $title_report_from_buyer
 * @property string $closing_docs_drafted
 * @property string $closing_statement
 * @property string $closing_statement_to_buyer
 * @property string $closing_date
 * @property text $notes
 * @property string $agent
*/
class AgentSale extends Model
{
    use SoftDeletes, FilterByUser;

    protected $fillable = ['file_number', 'client', 'property', 'city_town_village', 'county', 'buyer', 'buyer_attorney', 'rep_agmt', 'approval_letter', 'search_update', 'survey_update', 'tax_receipts', 'sewer_water_compliance', 'proposed_deed', 'mortgage_commitment', 'seach', 'mortgage_payoff_info', 'title_report_from_buyer', 'closing_docs_drafted', 'closing_statement', 'closing_statement_to_buyer', 'closing_date', 'notes', 'agent_id'];
    

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
