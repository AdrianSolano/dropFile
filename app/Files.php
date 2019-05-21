<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $fillable = ['uuid','user_id','name', 'description'];
}
