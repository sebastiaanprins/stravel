<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'countryName',
    ];

    // The languages that belongs to the country %%%%%
    public function languages()
    {
        return $this->belongsToMany(Language::class);
        // 'App\Language'
    }
}
