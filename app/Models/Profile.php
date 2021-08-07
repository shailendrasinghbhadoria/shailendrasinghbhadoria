<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Http\Controllers;

class Profile extends Model
{
    use HasFactory; 

    protected $fillable = [
        'name',
        'address',
        'state',
        'city',
        'zip',        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [        
        'remember_token',
    ];



}
