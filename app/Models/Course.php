<?php

namespace App\Models;

use App\Models\CourseCategory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'course_category_id',
        'name',
        'type',
        'image',
        'start_time',
        'end_time',
        'description',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(CourseCategory::class);
    }

}
