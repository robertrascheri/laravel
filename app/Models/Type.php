<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $guarded = [];

     public function pets()
    {
    	return $this->belongsToMany(Pet::class);
    }
 	public function worlds()
    {
    	return $this->belongsToMany(World::class);
    }


}
