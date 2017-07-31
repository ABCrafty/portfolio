<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
