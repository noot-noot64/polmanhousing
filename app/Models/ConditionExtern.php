<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ConditionExtern extends Model
{
    use HasFactory;
    protected $table = 'extern_conditions';


    public function conditions() :hasOne
    {
        return $this->hasOne(Conditions::class, 'id');
    }
    public function houses() :belongsTo
    {
        return $this->belongsTo(House::class, 'id');
    }
    public function externs() :belongsTo
    {
        return $this->belongsTo(Externs::class, 'extern_id');
    }
}
