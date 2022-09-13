<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Installations extends Model
{
    use HasFactory;
    protected $table = 'installations';

    public function conditionInstallation() :hasOne
    {
        return $this->hasOne(ConditionInstallation::class, 'installation_id');
    }
}
