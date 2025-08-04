<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningGroup extends Model
{
    use HasFactory;

    protected $table = 'learning_groups'; // si usas ese nombre en la migración

    protected $fillable = ['name'];

    // Relación: un grupo tiene muchos usuarios
    public function users()
    {
        return $this->hasMany(User::class, 'group_id');
    }

    // Relación: un grupo tiene muchos cursos (muchos a muchos)
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_group', 'group_id', 'course_id');
    }
}
