<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log_redeem extends Model
{
    use HasFactory;

    protected $fillable = [
    	'id',
        'user_id',
        'unique_code',
        'reedem_date',
    ];
}
