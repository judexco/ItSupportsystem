<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Businessu extends Model
{
    protected $fillable = ['name'];

     public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
