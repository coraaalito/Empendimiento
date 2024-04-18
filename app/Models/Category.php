<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded=[];

    //-------------------------------------------------------------------------
    //                           RELATIONSHIPS
    //-------------------------------------------------------------------------
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
    
}
