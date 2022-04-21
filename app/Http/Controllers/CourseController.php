<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Content;
use App\Models\CourseAccess;

class CourseController extends Controller
{
  public function index() {
    $course = Course::find(1)->all();

    return response()->json(['course' => $course]);
  }

  public function userAccessToCourse($user_id, $course_id) {
    $haveAccess = CourseAccess::userHaveAccessToCourse($user_id, $course_id);

    if(!$haveAccess) {
      return response()->json(['access' => $haveAccess], 404);
    }

    return response()->json(['access' => $haveAccess]);
  }

  public function saveContent($course) {
    return response()->json(Course::find($course)->contents);
  }
}
