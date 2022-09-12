<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    use HasFactory;
    protected $fillable = [
        'partenaire_id',
        'type_id',
        'object_partener_id',
        'year_signature',
        'year_collect',
        'suggestions',
        'difficults'
    ];
}
