<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
  use HasFactory;

  public function author(): BelongsTo
  {
    return $this->belongsTo(User::class, 'user_id');
  }

  public function category(): BelongsTo
  {
    return $this->belongsTo(Category::class);
  }

  public function comments(): HasMany
  {
    return $this->hasMany(Comment::class);
  }

  public function tags(): BelongsToMany
  {
    return $this->belongsToMany(Tag::class, 'post_tags');
  }
}
