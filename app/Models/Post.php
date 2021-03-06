<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $primarykey = 'id';

    protected $fillable = ['user_id','User_name','title','body','likes'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

