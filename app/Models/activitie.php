<?php

namespace App\Models;

use App\Models\partner;
use App\Models\uacEntitie;
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

    public function structure()
    {
        return $this->belongsTo(uacStructure::class);
    }
    public function entitie()
    {
        return $this->belongsTo(uacEntitie::class);
    }
}
