<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'price', 'author', 'pages', 'publisher', 'year', 'hardcover', 'size_id', 'genre_id'];
    public function size() {
        return $this->belongsTo(Size::class);
    }
    public function genre() {
        return $this->belongsTo(Genre::class);
    }
}
