<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    protected $fillable=[

        'taskname','taskbody','completedat','points'

    ];

}
