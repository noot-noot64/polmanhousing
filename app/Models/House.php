<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use mysql_xdevapi\Table;

class House extends Model
{
    use HasFactory;
    protected $table = 'houses';

    public function conditions(): belongsTo
    {
        return $this->belongsTo(Conditions::class, 'condition_id');
    }
    public function renters(): hasOne
    {
        return $this->hasOne(Renter::class);
    }

    public function conditionInstallation() :hasOne
    {
        return $this->hasOne(ConditionInstallation::class, 'house_id');
    }
    public function conditionExtern() :hasOne
    {
        return $this->hasOne(ConditionExtern::class, 'house_id');
    }
    public function conditionFacade() :hasOne
    {
        return $this->hasOne(ConditionFacade::class, 'house_id');
    }
    public function conditionInterior() :hasOne
    {
        return $this->hasOne(ConditionInterior::class, 'house_id');
    }
    public function conditionSanitary() :hasOne
    {
        return $this->hasOne(ConditionSanitary::class, 'house_id');
    }
    public function conditionSubstructure() :hasOne
    {
        return $this->hasOne(ConditionSubstructure::class, 'house_id');
    }
    public function conditionSuperstructure() :hasOne
    {
        return $this->hasOne(ConditionSuperstructure::class, 'house_id');
    }

}
