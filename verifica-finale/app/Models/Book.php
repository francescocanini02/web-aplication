<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


    public function editor()
    {
        return $this->belongsTo(Editor::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}

