<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DidacticMaterial extends Model
{
    protected $fillable = ['course_id', 'material_name', 'file_path'];

    // Cada material pertenece a un curso
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
