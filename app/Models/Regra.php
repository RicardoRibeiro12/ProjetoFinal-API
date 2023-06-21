<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regra extends Model
{
    use HasFactory;

    public function conditions(): HasMany
    {
        return $this->hasMany(Condition::class,'id_regra','id');
    }
    public function ractions(): HasMany
    {
        return $this->hasMany(Raction::class,'id_regra','id');
    }
}
