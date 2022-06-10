<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guestbook extends Model
{
    use HasFactory;

    protected $fillable = [
    	'id',
    	'fullname',
    	'email',
        'email',
        'no_hp',
        'no_ktp',
    ];
}
