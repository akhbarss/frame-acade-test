<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\Request;

class Certifications extends Model
{
    use HasFactory;

    protected $fillable = [
        'imageCertification',
        'division'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    //Certifications ini berelasi many to one ke Users
    public function users(): BelongsTo{
        return $this->belongsTo(Users::class);
    }

    //Certitications ini berelasi many to many ke Modules
    public function modules(): BelongsToMany{
        return $this->belongsToMany(Modules::class);
    }
    
    public static function validateBody(Request $request){
        return $request->validate([
            'imageCertification' => [
                'required',
                'unique:certifications,imageCertification'
            ],
            'division' => [
                'required',
                'enum:BACKEND,FRONTEND',
                'string'
            ]
        ]);
    }
}
