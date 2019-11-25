<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tags extends Model
{
    protected $table = 'tags';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'title', 'description'];
    protected $guarded = ['created_at', 'updated_at'];
    protected $dates = ['deleted_at'];
    protected $hidden = ['password', 'remember_token'];
    public $timestamps = true;

    public function posts()
    {
        return $this->hasMany('App\Models\Posts');
    }
}
