<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'website',
        'description',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'company_id');
    }
}