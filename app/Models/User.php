<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'avatar',
        'name',
        'email',
        'phone',
        'summary',
        'address',
    ];

    public function work_experiences() {
        return $this->hasMany(WorkExperience::class);
    }

    public function educations() {
        return $this->hasMany(Education::class);
    }

    public function skills() {
        return $this->hasMany(Skill::class);
    }
}
