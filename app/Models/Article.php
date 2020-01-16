<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'title', 'description', 'author',
    ];

    public function getAll()
    {
        return $this->all();
    }
}
