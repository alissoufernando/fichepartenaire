<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activitie extends Model
{
    use HasFactory;
    protected $fillable = [
        'entitled',
        'year_of_execution',
        'partner_id',
        'uac_structure_id',
        'uac_entitie_id',
        'unite',
        'resultat'
    ];
}
