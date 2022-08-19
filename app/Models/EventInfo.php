<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'event_category',
        'eventReceivedinTheRiskUnitWithin',
        'feedbackReceivedWithInAppropriateTime',
        'feedbackSentToReportingDepartment',
        'IncidentAddedToTheRiskRegister',
        'status',
        'likelihood_string',
        'impact_string',
        'likelihood_num',
        'impact_num',
        'likelihood_color',
        'impact_color',
        'result_color',
        'result_string'

    ];
}
