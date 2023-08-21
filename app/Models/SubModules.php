<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SubModules extends Model
{
    use HasFactory;

    protected $table = "submodules";

    protected $fillable = [
        'name',
        'type',
        "content",
        "course_id",
        "module_id"
    ];

    //SubModules ini berelasi many to one ke Modules
    public function modules(): BelongsTo{
        return $this->belongsTo(Modules::class);
    }


    public function user_courses() : HasOne {
        return $this->hasOne(UserCourses::class,"submodule_id","id");
    }
}
