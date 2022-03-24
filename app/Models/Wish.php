<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'content_id',
        'created_at',
        'updated_at'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function content() {
        return $this->belongsTo('App\Models\Content', 'content_id', 'id');
    }
}
