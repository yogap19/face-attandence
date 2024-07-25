<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'name', 'slug', 'teacher', 'lessonHour', 'codeSubject', 'description', 'status'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public static function subjectName($slug)
    {
        $subject = static::where('slug', $slug)->first();

        if ($subject) {
            return $subject->name;
        }

        return null;
    }
}
