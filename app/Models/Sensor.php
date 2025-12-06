<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $table = 'sensors';
    protected $fillable = ['temperature', 'humidity', 'steam', 'light', 'soil', 'water'];

    protected function createdAt(): Attribute
    {

        return Attribute::make(

            get: fn ($value) => Carbon::parse($value)->timezone('America/Sao_Paulo')->format('d/m/Y H:i'),

        );

    }
}
