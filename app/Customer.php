<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    //allow mass assignment
    // protected $fillable=['name','email','status'];

    //Guarded by mass assignment
    protected $guarded = [];

    public function scopeActive($query){
      return $query->where('status', 1);
    }

    public function scopeInactive($query){
      return $query->where('status',0);
    }
}
