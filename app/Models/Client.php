<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable =['name','email','password','number_phone','gender_id','address','room_id','paid','dues'];
    protected $table = 'clients';
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function room()
    {
        return $this->belongsTo('App\Models\Room','room_id');
    }

    public function gender()
    {
        return $this->belongsTo('App\Models\Gender','gender_id');
    }
}
