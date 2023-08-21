<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Frameworks extends Model {
    use HasFactory;

    protected $fillable = [
        'keyFramework',
        'title',
        'progress',
        'frameworkType'
    ];

    //Frameworks ini berelasi many to one ke users
    public function user(): BelongsTo{
        return $this->belongsTo(Users::class);
    }

    //Framewoks ini berelasi many to many dari Modules
    public function modules(): BelongsToMany{
        return $this->belongsToMany(Modules::class);
    }
    
}
