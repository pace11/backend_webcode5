<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'first_name', 'last_name', 'user_name', 'email', 'email_verified_at', 'password', 'role', 'gender'];
    protected $guarded = ['created_at', 'updated_at'];
    protected $dates = ['deleted_at'];
    protected $hidden = ['password', 'remember_token'];
    public $timestamps = true;

    public function posts()
    {
        return $this->hasMany('App\Models\Posts');
    }
}
