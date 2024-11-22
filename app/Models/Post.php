<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'is_published',
        'is_archived',
    ];

    /**
     * Alterna o estado de arquivamento do post.
     */
    public function changeArchive()
    {
        $this->is_archived  = !$this->is_archived ;
        $this->save();
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'published' => 'boolean', // Converte automaticamente para booleano
    ];

    /**
     * Scope a query to only include published posts.
     */
    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    /**
     * Scope a query to only include unpublished posts.
     */
    public function scopeUnpublished($query)
    {
        return $query->where('published', false);
    }
}
