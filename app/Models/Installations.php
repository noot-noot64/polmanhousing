<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installations extends Model
{
    use HasFactory;
    protected $table = 'installations';

    public function house()
    {
        return $this->belongsToMany('houses', 'installation_conditions')->withPivot('condition_id');
    }
    public function condition()
    {
        return $this->belongsToMany('conditions', 'installation_conditions')->withPivot('house_id');
    }
}
