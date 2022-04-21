<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Course;

class CourseAccess extends Model
{

  use HasFactory;

  /**
   * @var string
   */
  protected $table = 'course_access';

  /**
   * @var string[]
   */
  protected $fillable = [
    'id',
    'user_id',
    'course_id',
    'created_at',
    'updated_at'
  ];

  /**
   * @var bool
   */
  public $timestamps = false;

  protected $casts = [
    'created_at' => "date:d/m/Y",
    'updated_at' => "date:d/m/Y"
  ];

  public function courses() {
    return $this->hasMany(Course::class, 'id', 'course_id');
  }

  public function userHaveAccessToCourse($user_id, $course_id) {
    return CourseAccess::where('course_id', $course_id)->where('user_id', $user_id)->exists();
  }
}