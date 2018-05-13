<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'id','name','path','level','parent_id','order','is_active','created_at','updated_at'
    ];
    protected $hidden = ['id'];
}
