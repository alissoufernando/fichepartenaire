<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class otherInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'partner_id',
        'email',
        'phone',
        'phone_whatsapp',
        'identite',
        'poste',
    ];
}
