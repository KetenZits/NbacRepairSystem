<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceUser extends Model
{
    //
    protected $table = 'serviceuser';

    protected $fillable = [
        'name',
        'itemrepair',
        'detailrepair',
        'location',
        'date',
    ];
}
