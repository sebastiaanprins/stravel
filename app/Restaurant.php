<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //
    protected $fillable = [
        'restName',
        'restKitchen',
        'restLocation',
        'restCity',
        'restWebsite',
    ];
}
