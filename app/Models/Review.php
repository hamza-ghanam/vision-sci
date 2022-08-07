<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'rate',
        'comment',
        'user_id',
        'article_id',
    ];

    /**
     * Get the writer of the review.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the article of the review.
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
