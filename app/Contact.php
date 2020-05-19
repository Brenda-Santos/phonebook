<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'salutation', 'name','number','email', 'birth','avatar','note'
    ];
}
