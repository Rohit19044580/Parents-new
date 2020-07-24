<?php


namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class type extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'type';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}