<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'manufacturer',
        'due',
        'test_result_time',
        'price',
        'quantity',
        'requirements'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'due' => 'datetime',
        'price' => 'double',
    ];
}
