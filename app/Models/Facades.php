<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Facades extends Model
{
    use HasFactory;
    protected $table = 'facades';

    public function conditionFacade() :hasOne
    {
        return $this->hasOne(ConditionFacade::class, 'facade_id');
    }
}
