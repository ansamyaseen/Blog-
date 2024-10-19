<?php

namespace App\Models;
use App\Models\User;

use App\Models\Comment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_title',
        'content',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
