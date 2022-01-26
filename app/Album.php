<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'title',
        'n_songs',
        'sold',
        'record_company',
        'genres',
        'publication_date',
        'total_duration',
        'author_id'
    ];
}
