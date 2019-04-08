<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Data extends Model
{
    //public $timestamps = false;
    protected $table = 'data';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    

    protected $fillable =['item', 'count', 'price', 'paid'];
    protected $guarded =['id'];

    

}
