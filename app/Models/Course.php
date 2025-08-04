<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course_key', 'title', 'cover_image', 'content', 'robotics_kit'];

    // Un curso puede tener muchos materiales didácticos
    public function didacticMaterials()
    {
        return $this->hasMany(DidacticMaterial::class);
    }

    // Un curso pertenece a muchos grupos (muchos a muchos)
    public function groups()
    {
        return $this->belongsToMany(LearningGroup::class, 'course_group', 'course_id', 'group_id');
    }
}
