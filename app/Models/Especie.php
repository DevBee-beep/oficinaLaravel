<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Especie extends Model
{
    use HasFactory;
    protected $table = 'especie';
    public $timestamps = false;

    public function animais(): HasMany{
        return $this->hasMany(Animal::class);
    }

    
}
