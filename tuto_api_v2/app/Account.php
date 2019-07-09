<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{

    protected $fillable = [
        'user_id', 'immeuble_id', 'content'
    ];

    /*
    public function immeubles() {
        return $this->hasMany('App\Immeuble', 'id', 'immeuble_id');
    }
    */

    public function users() {
        return $this->hasMany('App\User', 'id', 'account_id');
    }
    public function immeubles() {
        return $this->belongsToMany('App\Immeuble', 'account_immeuble', 'account_id', 'immeuble_id');
    }
}
