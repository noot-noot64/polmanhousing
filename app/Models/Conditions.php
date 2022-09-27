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

    public function conditionInstallation() :hasOne
    {
        return $this->hasOne(ConditionInstallation::class, 'condition_id');
    }
    public function conditionExtern() :hasMany
    {
        return $this->hasMany(ConditionExtern::class, 'condition_id');
    }
    public function conditionFacade() :hasOne
    {
        return $this->hasOne(ConditionFacade::class, 'condition_id');
    }
    public function conditionInterior() :hasOne
    {
        return $this->hasOne(ConditionInterior::class, 'condition_id');
    }
    public function conditionSanitary() :hasOne
    {
        return $this->hasOne(ConditionSanitary::class, 'condition_id');
    }
    public function conditionSubstructure() :hasOne
    {
        return $this->hasOne(ConditionSubstructure::class, 'condition_id');
    }
    public function conditionSuperstructure() :hasOne
    {
        return $this->hasOne(ConditionSuperstructure::class, 'condition_id');
    }
}
