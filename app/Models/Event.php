<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $appends = ['month_date'];
    protected $fillable = [
        'event-date',
        'location',
        'reporting-department',
        'responding-department',
        'other-department',
        'patient-name',
        'medical-record',
        'employee',
        'visitor',
        'other',
        'whatIsBeingReported',
        'event-detail',
        'date',
        'reporter-name',
        'reporter-phone',
        'reporter-email',
        'reporter-position',
        'action-taken',
        'typeOfInjury',
        'levelOFHarm',
        'likelihoodCategory',
        'medicationError',
        'contriputingFactors',
        'status',
    ];

    protected $casts = [
        'contriputingFactors' => 'array',
    ];

    public function note()
    {
        return $this->hasOne(EventNote::class,'event_id');
    }

     function getMonthDateAttribute()
    {
        $date =  Carbon::create($this->attributes['event-date']);
        return $date->toFormattedDateString();
    }

    public function info()
    {
        return $this->hasOne(EventInfo::class,'event_id');
    }
}
