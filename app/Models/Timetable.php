<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_id',
        'subject_id',
        'teacher_id',
        'day_of_week',
        'start_time',
        'end_time',
    ];

    // Relationship with SchoolClass
    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }

    // Relationship with Subject
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    // Relationship with Teacher (if you have a Teacher model)
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }  
    
}
