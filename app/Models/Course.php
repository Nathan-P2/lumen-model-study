<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


use App\Models\Content;

use App\Models\CourseAccess;

class Course extends Model
{

  use HasFactory;

  /**
   * @var string
   */
  protected $table = 'course';

  /**
   * @var string[]
   */
  protected $fillable = [
    'id',
    'name',
    'description',
    'status',
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

  public function contents() {
    return $this->hasMany(Content::class, 'course_id', 'id');
  }

  public function accesses() {
    return $this->hasMany(CourseAccess::class, 'course_id', 'id');
  }
}
