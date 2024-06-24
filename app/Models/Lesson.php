<?php

namespace App\Models;

use Database\Factories\ClassFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $table = 'classes';

    protected static function newFactory(): Factory
    {
        return ClassFactory::new();
    }
}
