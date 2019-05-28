<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{   
    /* Modelo de Files */
    protected $table = 'files';
    
    protected $fillable = ['user_id', 'name', 'slug', 'descripcion','file'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }  
}
