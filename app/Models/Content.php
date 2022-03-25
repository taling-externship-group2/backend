<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'image',
        'user_id',
        'title',
        'contents_sum',
        'target',
        'contents_detail',
        'crclm',
        'cateMain',
        'cateSub',
        'created_at',
        'updated_at'
    ];



    public function wishes()
    {
        return $this->hasMany('App\Models\Wish', 'content_id', 'id');
    }
    public function images()
    {
        return $this->hasMany('App\Models\Image', 'content_id', 'id');
    }


    // 스탑
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
