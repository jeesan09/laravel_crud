<?php

namespace App;
use Collective\Html\Eloquent\FormAccessible;

use Illuminate\Database\Eloquent\Model;

class testmodel extends Model
{
    //
        protected $fillable = [
        'test_id','test_text'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

}
