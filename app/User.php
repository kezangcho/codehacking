<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','is_active','photo_id','delete_user'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
   
    // relation b/w user and role
    public function role(){
        return $this->belongsTo('App\Role');
    }

    // relation b/w user and photo
    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function isAdmin(){
        if($this->role->name == "administrator"){
            return true;
        }
        return false;
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }


}
