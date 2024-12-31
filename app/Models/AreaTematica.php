<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AreaTematica extends Model
{
    protected $table = 'area_tematicas';
    protected $fillable = [
        'nombre'
    ];

    public function saberes(): HasMany
    {
        return $this->hasMany(Saber::class, 'area_tematica_id', 'id');
    }
}