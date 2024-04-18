<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $guarded=[];

    //-------------------------------------------------------------------------
    //                           RELATIONSHIPS
    //-------------------------------------------------------------------------
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    
}
