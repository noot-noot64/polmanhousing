<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conditions extends Model
{
    use HasFactory;
    protected $table = 'conditions';

    public function houses(): \Illuminate\Database\Eloquent\Relations\hasOne
    {
        return $this->hasOne(House::class);
    }
}
