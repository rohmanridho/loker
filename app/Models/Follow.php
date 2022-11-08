<?php

namespace App\Models;

use App\Models\User;
use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Follow extends Model
{
    use HasFactory;

    protected $fillable = [
        'companies_id', 'users_id'
    ];

    protected $hidden = [];

    public function company()
    {
        return $this->hasOne(Company::class, 'id', 'companies_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}