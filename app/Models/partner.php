<?php

namespace App\Models;

use App\Models\type;
use App\Models\activitie;
use App\Models\otherInfo;
use App\Models\partenaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class partner extends Model
{
    use HasFactory;
    protected $fillable = [
        'partenaire_id',
        'type_id',
        'activitie_id',
        'other_info_id',
        'object_partener_id',
        'year_signature',
        'year_collect',
        'suggestions',
        'difficults'
    ];

    public function type()
    {
        return $this->belongsTo(type::class);
    }

    public function partenaire()
    {
        return $this->belongsTo(partenaire::class);
    }

    public function activitie()
    {
        return $this->belongsTo(activitie::class);
    }

    public function otherInfo()
    {
        return $this->belongsTo(otherInfo::class);
    }
}

