<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser, MustVerifyEmail
{
  use HasFactory, Notifiable, SoftDeletes;

  protected $fillable = [
    'name',
    'email',
    'password',
  ];

  protected $hidden = [
    'password',
    'remember_token',
  ];

  protected function casts(): array
  {
    return [
      'email_verified_at' => 'datetime',
      'password' => 'hashed',
    ];
  }

  const ROLE_GUEST = 'guest';
  const ROLE_USER = 'user';
  const ROLE_ADMIN = 'admin';

  public function isAdmin(): bool
  {
    return $this->role == User::ROLE_ADMIN;
  }

  public function canAccessPanel(Panel $panel): bool
  {
    return $this->email && $this->isAdmin();
  }

  public static function roles(): array
  {
    return [
      self::ROLE_GUEST => 'Guest',
      self::ROLE_USER => 'User',
      self::ROLE_ADMIN => 'Admin',
    ];
  }

  public function scopeAdmin($query)
  {
    return $query->where('role', User::ROLE_ADMIN);
  }

}
