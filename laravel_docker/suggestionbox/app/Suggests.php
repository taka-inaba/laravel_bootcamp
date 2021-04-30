<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggests extends Model
{
    protected $fillable = [
        'author', 'content',
    ];

    public function votes()
    {
        return $this->hasMany('App\Vote', 'suggestion_id', 'id');
    }
}
