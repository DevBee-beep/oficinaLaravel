<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Consulta extends Model
{
    use HasFactory;
    protected $table = 'consulta';
    public $timestamps = false;

    public function tratamento():BelongsTo{
        return $this->belongsTo(Tratamento::class);
    }
    public function veterinario():BelongsTo{
        return $this->belongsTo(veterinario::class);
    }
}
