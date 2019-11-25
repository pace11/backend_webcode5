<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'user_id', 'tag_id', 'title', 'alias', 'description', 'image_post', 'image_banner', 'tag_title', 'meta_description'];
    protected $guarded = ['created_at', 'updated_at'];
    protected $dates = ['deleted_at'];
    public $timestamps = true;

    public function tags()
    {
        return $this->belongsTo('App\Models\Tags', 'tag_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\Users', 'user_id', 'id');
    }
}
