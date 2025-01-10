<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inquiry extends Model
{
  use HasFactory;
  use SoftDeletes;

  const STATUS_NEW = 'new';
  const STATUS_VIEWED = 'viewed';

  public static function statuses(): array
  {
    return [
      self::STATUS_NEW => 'New',
      self::STATUS_VIEWED => 'Viewed',
    ];
  }

  protected $fillable = [
    'first_name', 'last_name', 'email', 'phone', 'message'
  ];

  protected function casts(): array
  {
    return [
      'data' => 'array'
    ];
  }

  public function scopeNew($query)
  {
    return $query->where('status', self::STATUS_NEW);
  }

  public function getNameAttribute(): ?string
  {
    return join(' ', [$this->first_name, $this->last_name]);
  }

  public function isNew(): bool
  {
    return $this->status == self::STATUS_NEW;
  }

  public function markAsViewed(): void
  {
    if($this->status == self::STATUS_NEW){
      $this->status = self::STATUS_VIEWED;
      $this->save();
    }
  }

}
