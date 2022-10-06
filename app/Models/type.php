<?php

namespace App\Models;

use App\Models\partner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class type extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',

    ];
    public function partner()
    {
        return $this->belongsTo(partner::class);
    }
}
