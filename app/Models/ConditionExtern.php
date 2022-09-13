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

    protected $fillable = [
        'id',
        'extern_id',
        'condition_id',
        'house_id',
        'comment',
    ];

    public function conditions() :hasOne
    {
        return $this->hasOne(Conditions::class, 'condition_id');
    }
    public function houses() :belongsTo
    {
        return $this->belongsTo(House::class, 'house_id');
    }
    public function externs() :belongsTo
    {
        return $this->belongsTo(Externs::class, 'extern_id');
    }
}
