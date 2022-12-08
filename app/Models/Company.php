<?php

namespace App\Models;

use App\Models\Industry;
use App\Models\Province;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    // use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'photo', 'users_id', 'industries_id', 'provinces_id', 'description', 'phone', 'address', 'email', 'document', 'status'
    ];

    public function user()
    {
        return $this->hasOne(User::class,'id', 'users_id');
    }

    public function jobs() {
        return $this->hasMany(Job::class, 'companies_id', 'id');
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class, 'industries_id', 'id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'provinces_id', 'id');
    }
}