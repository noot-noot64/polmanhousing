<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Renter extends Model
{
    use HasFactory;
    protected $table = 'renters';

    public function houses(): belongsTo
    {
        return $this->belongsTo(House::class, 'house_id');
    }
}
