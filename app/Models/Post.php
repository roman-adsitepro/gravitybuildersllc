<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
  use HasFactory;
  use Sluggable;
  use SoftDeletes;

  const STATUS_PUBLIC = 'public';
  const STATUS_DRAFT = 'draft';

  public function sluggable(): array
  {
    return [
      'slug' => [
        'source' => ['title', 'id'] 
      ]
    ];
  }

}
