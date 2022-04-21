<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Content extends Model
{
  use HasFactory;

  /**
   * @var string
   */
  protected $table = 'content';

  /**
   * @var string[]
   */
  protected $fillable = [
    'id',
    'created_at',
    'updated_at',
    'content_title',
    'course_id'
  ];

  /**
   * @var bool
   */
  public $timestamps = false;
}
