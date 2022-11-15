<?php

namespace App\Models;

use App\Models\activitie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class uacStructure extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',

    ];
    public function activitie()
    {
        return $this->belongsTo(activitie::class);
    }
}
