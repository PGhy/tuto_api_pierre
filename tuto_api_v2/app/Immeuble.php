<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Immeuble extends Model
{
    protected $fillable = [
        'address', 'name'
    ];

    public function account() {
        return $this->belongsToMany('App\Account', 'account_immeuble', 'immeuble_id', 'account_id');
    }
}
