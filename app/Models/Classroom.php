<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classroom extends Model
{
     use HasFactory;

    protected $fillable = [
        'nama_kelas',
        'tingkat',
        'jurusan',
        'student_id',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
