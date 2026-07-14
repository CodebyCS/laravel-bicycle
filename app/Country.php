<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function Users()
    {
        return $this->hasMany(User::class);
    }
}
