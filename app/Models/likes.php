<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class likes extends Model
{
    use HasFactory;
    protected $primarykey = 'id';

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
