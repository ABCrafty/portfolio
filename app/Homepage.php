<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $table = "homepage";

    protected $fillable = [
        'username',
        'job',
        'age',
        'other_projects',
        'commitment1_title',
        'commitment1_content',
        'commitment2_title',
        'commitment2_content',
        'commitment3_title',
        'commitment3_content',
        'tech_title',
        'tech',
    ];

    protected $hidden = [
        'id',
        '_token'
    ];
}
