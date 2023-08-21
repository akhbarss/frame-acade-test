<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\UserCourses;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyCoursesController extends Controller
{

    public function index() {

        $course_id = UserCourses::where("user_id",Auth::user()->id)->orderBy("user_courses.done_at","desc")->first();
        if($course_id){
            $recent = DB::table("courses")
                ->join("user_courses","user_courses.course_id","courses.id")
                ->where("user_courses.user_id",Auth::user()->id)
                ->where("user_courses.deleted_at",null)
                ->where("user_courses.done_at","<>",null)
                ->where("courses.id",$course_id->course_id)
                ->selectRaw('
                    user_courses.user_id,
                    courses.id,
                    courses.name,
                    courses.description,
                    courses.`type`,
                    COUNT(user_courses.id) AS total,
                    COUNT(user_courses.done_at) AS done
                ')
                ->groupByRaw("user_id,courses.id")
                ->first();
        }else{
            $recent = null;
        }


        $lists = DB::table("courses")
            ->join("user_courses","user_courses.course_id","courses.id")
            ->where("user_courses.user_id",Auth::user()->id)
            ->where("user_courses.deleted_at",null)
            ->selectRaw('
                user_courses.user_id,
                courses.id,
                courses.name,
                courses.description,
                courses.`type`,
                COUNT(user_courses.id) AS total,
                COUNT(user_courses.done_at) AS done
            ')
            ->groupByRaw("user_id,courses.id,courses.name,courses.description,courses.`type`")
            ->get();



        return view("my-course")->with("courses",$lists)->with("recent",$recent);
    }

    public function learn($course_id) {
        $course = Courses::with(["modules","modules.subModules","modules.subModules.user_courses"])
            ->whereHas("modules.subModules.user_courses",function ($q) {
                $q->where('user_id',Auth::user()->id);
            })
            ->find($course_id);


        return view("learn")->with('course',$course);
    }

    public function certificate() {

        $pdf = Pdf::loadView('certificate.certificate-content');
        $pdf->setPaper("A4", "landscape");
        return $pdf->download('certificate.pdf');
    }
}
