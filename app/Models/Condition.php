<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;


    public function regras()
    {
        return $this->belongsToMany(Regra::class, 'regra_condition');
    }
}
