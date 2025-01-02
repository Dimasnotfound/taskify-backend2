<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'task_id',
        'user_id'
    ];

    /**
     * Relasi dengan model Task.
     * Satu komentar terkait dengan satu tugas.
     */
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    /**
     * Relasi dengan model User.
     * Satu komentar dibuat oleh satu pengguna.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
