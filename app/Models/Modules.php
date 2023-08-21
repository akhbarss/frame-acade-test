<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Modules extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'course_id'
    ];

    //Modules ini berelasi one to many dari Submodules
    public function subModules(): HasMany{
        return $this->hasMany(Submodules::class,"module_id","id");
    }
//
//    //Modules ini berelasi many to many ke Certifications
//    public function certifications(): BelongsToMany{
//        return $this->belongsToMany(Certifications::class);
//    }
//
//    //modules ini berelasi many to many ke Frameworks
//    public function frameworks(): BelongsToMany{
//        return $this->belongsToMany(Frameworks::class);
//    }
}
