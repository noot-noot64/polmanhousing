<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Externs extends Model
{
    use HasFactory;
    protected $table = 'externs';

    public function conditionExtern() :hasOne
    {
        return $this->hasOne(ConditionExtern::class, 'extern_id');
    }
}
