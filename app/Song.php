<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'title',
        'genres', 
        'publication_date',
        'author_id',
        'record_company',
        'duration'
    ];
}
