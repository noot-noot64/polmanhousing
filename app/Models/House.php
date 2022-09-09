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
    public function houses(): \Illuminate\Database\Eloquent\Relations\hasOne
    {
        return $this->hasOne(Renter::class);
    }


    public function installation()
    {
        return $this->belongsToMany('installations', 'installation_conditions')->withPivot('condition_id');
    }
     public function condition()
    {
        return $this->belongsToMany('conditions', 'installation_conditions')->withPivot('installation_id');
    }


}
