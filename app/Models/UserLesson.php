<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserLesson extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'user_lesson';

    protected $fillable = [
        'course_id',
        'user_id',
    ];
}
