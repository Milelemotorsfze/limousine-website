<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeOurRSLDriverOrInvestor extends Model
{
    use HasFactory;
    protected $table="be_our_r_s_l_driver_or_investors";
    protected $fillable = [
        'name',
        'email',
        'country_code',
        'number',
        'vehicle',
        'passport_or_visa_copy',
        'driver_license'
    ];
}
