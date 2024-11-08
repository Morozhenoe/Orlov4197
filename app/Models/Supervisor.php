<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function holidays()
    {
        return $this->hasMany(Holiday::class);
    }
}
