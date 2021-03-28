<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = "schedules";
    public $timestamps = false;
    protected $fillable = [
        'id_test',
        'id_user',
        'schedule'
    ];
     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'schedule' => 'datetime',
    ];
}
