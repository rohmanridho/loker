<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', 'jobs_id'
    ];

    public function job()
    {
        return $this->hasOne(Job::class, 'id', 'jobs_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

}
