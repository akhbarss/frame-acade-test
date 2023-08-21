<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\SubModules;
use App\Models\UserCourses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AllCoursesController extends Controller
{

    public function index() {
        $courses = Courses::all();

        return view("all-courses")->with("courses",$courses);
    }

    public function enrolled($course_id) {
        $submodules = SubModules::where("course_id",$course_id)->get();

        DB::beginTransaction();

        foreach ($submodules as $submodule) {
            UserCourses::create([
                "user_id" => Auth::user()->id,
                "course_id" => $course_id,
                "module_id" => $submodule->module_id,
                "submodule_id" => $submodule->id,
                "done_at" => null
            ]);
        }

        DB::commit();

        return redirect("my-courses");
    }

    public function detail($id) {

        $course = Courses::with(["modules","modules.subModules"])->find($id);


        return view("detail-course")->with('course',$course);
    }
}
