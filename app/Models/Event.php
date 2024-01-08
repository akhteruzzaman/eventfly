<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'discount_code',
        'event_title',
        'event_type',
        'event_details',
        'start_date',
        'end_date',
        'priority',
        // Add 'id' to the fillable array
        'id',
    ];
}
