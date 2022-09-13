<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Interiors extends Model
{
    use HasFactory;
    protected $table = 'interiors';

    public function conditionInteriors() :hasOne
    {
        return $this->hasOne(ConditionInterior::class, 'interior_id');
    }
}
