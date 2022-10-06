<?php

namespace App\Models;

use App\Models\otherInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class partenaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',

    ];

    public function partner()
    {
        return $this->belongsTo(partner::class);
    }

    public function otherInfo()
    {
        return $this->belongsTo(otherInfo::class);
    }
}
