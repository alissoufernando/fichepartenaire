<?php

namespace App\Models;

use App\Models\partner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class activitie extends Model
{
    use HasFactory;
    protected $fillable = [
        'entitled',
        'year_of_execution',
        'uac_structure_id',
        'uac_entitie_id',
        'unite',
        'resultat'
    ];

    public function partner()
    {
        return $this->belongsTo(partner::class);
    }
}
