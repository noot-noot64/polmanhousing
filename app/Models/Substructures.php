<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Substructures extends Model
{
    use HasFactory;
    protected $table = 'substructures';

    public function conditionSubstructure() :hasOne
    {
        return $this->hasOne(ConditionSubstructure::class, 'substructure_id');
    }
}
