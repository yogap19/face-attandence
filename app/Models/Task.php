<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'codeTask', 'taskName', 'status', 'deadline', 'description', 'subject', 'teacher'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'taskName'
            ]
        ];
    }
}
