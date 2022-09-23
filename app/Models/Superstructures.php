<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Superstructures extends Model
{
    use HasFactory;
    protected $table = 'superstructures';

    public function conditionSuperstructure() :hasOne
    {
        return $this->hasOne(ConditionSuperstructure::class, 'superstructure_id');
    }
}
