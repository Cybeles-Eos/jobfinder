<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Joblist extends Model
{
    use HasFactory;
    protected $table = 'joblists';
    protected $fillable = ['title', 'description', 'salary'];
}
