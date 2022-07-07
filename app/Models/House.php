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
}
