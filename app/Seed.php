<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seed extends Model
{
    protected $fillable = [
        'active', 'name', 'latin_name', 'type', 'photo_url', 'description', 'days_to_harvest', 'instructions', 'pestdisease', 'saving', 'source',
    ];
}
