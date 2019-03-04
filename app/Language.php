<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    // protected $fillable = [
    //     'languageName',
    // ];

        // The countries that belongs to the language %%%%%
        public function countries()
        {
            return $this->belongsToMany(Country::class);
            // 'App\Country'
        }
}
