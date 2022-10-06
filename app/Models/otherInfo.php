<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class otherInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'phone',
        'phone_whatsapp',
        'identite',
        'poste',
    ];
    public function partner()
    {
        return $this->belongsTo(partner::class);
    }
}
