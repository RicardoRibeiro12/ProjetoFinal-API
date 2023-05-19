<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gateway extends Model
{
    use HasFactory;




    public function controladores(): HasMany
    {
        return $this->hasMany(Controladore::class,'id_gateway','id');
    }

}
