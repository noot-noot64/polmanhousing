<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ConditionInstallation extends Model
{
    use HasFactory;
    protected $table = 'installation_conditions';

    protected $fillable = [
        'id',
        'installation_id',
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
    public function installations() :belongsTo
    {
        return $this->belongsTo(Installations::class, 'installation_id');
    }
}
