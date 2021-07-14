<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'business_type',
        'referred_service_id',
        'price',
        'allow_cancel',
        'auto_confirm',
        'allow_booking_max_day_ago',
        'service_duration_type',
        'service_starting_date',
        'service_ending_date',
        'service_duration',
        'buffer_time',
        'multiple_bookings',
        'available_seat',
        'description',
        'service_starts',
        'service_ends',
        'max_booking',
        'alias',
        'created_by',
        'activation',
        'consider_children_for_price',
        'age_range',
        'percentage',
        'break_time'
    ];
}
