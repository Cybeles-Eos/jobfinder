<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /** @use HasFactory<\Database\Factories\NewsFactory> */
    use HasFactory;

    protected $fillable = ['title', 'content'];

    protected function comment(){
        return $this->belongsTo(Comment::class);
    }

    public function joblist(){
        return $this->belongsToMany(Joblist::class);
    }
}
