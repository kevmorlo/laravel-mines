<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mine extends Model
{
    public $timestamps = false;

    use HasFactory;


    public function concession(): BelongsTo
    {
        return $this->belongsTo( related: Concession::class);
    }
}
