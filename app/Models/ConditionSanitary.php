<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ConditionSanitary extends Model
{
    use HasFactory;
    protected $table = 'sanitary_conditions';

    protected $fillable = [
        'id',
        'sanitary_id',
        'condition_id',
        'house_id',
        'comment',
    ];

    public function conditions() :hasOne
    {
        return $this->hasOne(Conditions::class, 'id');
    }
    public function houses() :belongsTo
    {
        return $this->belongsTo(House::class, 'house_id');
    }
    public function sanitaries() :belongsTo
    {
        return $this->belongsTo(Sanitaries::class, 'id');
    }
}
