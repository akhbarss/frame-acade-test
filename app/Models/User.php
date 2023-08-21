<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable {
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'created_at',
        'updated_at'
    ];

    //user berelasi one to many ke cerfifications
    public function certifications(): HasMany{
        return $this->hasMany(Certifications::class, 'user_id');
    }

    //user berelasi ont to many ke frameworks
    public function frameworks(): HasMany{
        return $this->hasMany(Frameworks::class, 'user_id');
    }

    public function validateModel(Request $request){        
        return $request->validate([
            'username' => [
                'required',
                'string'
            ],
            'email' => [
                'required',
                'string',
                'email'
            ],
            'password' => [
                'required',
                'string'
            ]
        ]);
    }

}