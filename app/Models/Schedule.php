<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;
class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name',
        'patient_status',
        'email',
        'contact_number',
        'scheduled_on',
    ];
    public $timestamps = false;
}
