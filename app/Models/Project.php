<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'writer_id', 'slug', 'title', 'img', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }
}