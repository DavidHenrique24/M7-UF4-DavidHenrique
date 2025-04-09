<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Para crear el modelo:
//php artisan make:model Student
class Student extends Model
{
    use HasFactory;
protected $table = 'students';
//La propiedad $fillable indica qué campos pueden rellenarse automáticamente.
protected $fillable = ['name', 'email', 'phone', 'address'];
}

