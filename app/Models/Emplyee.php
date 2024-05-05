<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplyee extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','last_name','email', 'password' ,'number_phone','address','born_in','number_id','workerAt_id','gender_id','specialization_id','nationalitie_id'];

    public function place()
    {
        return $this->belongsTo('App\Models\Place','workerAt_id');
    }

    public function gender()
    {
        return $this->belongsTo('App\Models\Gender','gender_id');
    }

    public function specialization()
    {
        return $this->belongsTo('App\Models\Specialization','specialization_id');
    }

    public function nationalitie()
    {
        return $this->belongsTo('App\Models\Nationalitie','nationalitie_id');
    }
    
    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}
