<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'body'];
    public $timestamps = true;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
