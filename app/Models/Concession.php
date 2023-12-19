<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\ProductStatusEnum;

class Concession extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $casts = [

        'status' => ProductStatusEnum::class

    ];

    public function mines(){
        return $this->hasMany(Mine::class);
    }

    

}
