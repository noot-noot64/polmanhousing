<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Externs extends Model
{
    use HasFactory;
    protected $table = 'externs';

    public function conditionExtern() :hasMany
    {
        return $this->hasMany(ConditionExtern::class, 'extern_id');
    }
}
