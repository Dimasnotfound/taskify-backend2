<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'owner_id'];

    public function columns()
    {
        return $this->hasMany(UserStoryTask::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function collaborators()
    {
        return $this->belongsToMany(User::class, 'collaborators')
                    ->withPivot('role');
    }
}
