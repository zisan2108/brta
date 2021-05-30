<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NidCard extends Model
{
    public function user()
    {
        return $this
            ->belongsTo('App\User');
    }
}
