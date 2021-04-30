<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = ["suggestion_id"];

    public function suggests()
    {
        return $this->belongsTo('App\Suggests');
    }

}
