<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCourses extends Model
{

    protected $table = "user_courses";

    protected $fillable = [
        "user_id",
        "course_id",
        "module_id",
        "submodule_id",
        "done_at"
    ];


}
