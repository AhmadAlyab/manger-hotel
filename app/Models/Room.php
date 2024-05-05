<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = ['numder_room','degeer_id','note'];

    public function degeer()
    {
        return $this->belongsTo('App\Models\Degeer','degeer_id');
    }
}
