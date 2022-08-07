<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'publish_date',
        'link',
        'abstract',
        'views_count',
        'type',
        'classification_id',
        'language',
        'status',
        'keywords',
        'submitter',
    ];

    /**
     * Get the authors contributes in this article.
     */
    public function authors()
    {
        return $this->belongsToMany(User::class, 'user_article')
            ->withPivot('deleted_at')
            ->wherePivot('deleted_at', null)
            ->withTimestamps();
    }

    /**
     * Get the classification of the review.
     */
    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }

    /**
     * Get all articles's reviews.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class, 'article_id');
    }

    public function submitter(){
        return $this->belongsTo(User::class);
    }
}
