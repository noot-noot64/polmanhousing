<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sanitaries extends Model
{
    use HasFactory;
    protected $table = 'sanitaries';

    public function conditionSanitary() :hasOne
    {
        return $this->hasOne(ConditionSanitary::class, 'sanitary_id');
    }
}
