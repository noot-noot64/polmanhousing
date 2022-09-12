<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Conditions extends Model
{
    use HasFactory;
    protected $table = 'conditions';

    public function houses(): hasOne
    {
        return $this->hasOne(House::class);
    }

    public function condition_installation() :hasOne
    {
        return $this->hasOne(ConditionInstallation::class, 'condition_id');
    }
}
