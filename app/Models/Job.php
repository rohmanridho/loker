<?php

namespace App\Models;

use App\Models\Company;
use App\Models\Save;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    // use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'companies_id', 'categories_id', 'slug', 'type', 'salary', 'schedule', 'description'
    ];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('description', '%', '%' . $search . '%')
            ->orWhereHas('company', function($query) use ($search){
                $query->where('name', 'LIKE', '%'. $search . '%');
            });
        });
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'companies_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }

    // public function simpan()
    // {
    //     return $this->hasOne(Save::class, 'jobs_id', 'id');
    // }
}