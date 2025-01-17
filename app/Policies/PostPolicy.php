<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{

  public function viewAny(User $user): bool
    {
        return false; // $user->isAdmin();
    }

    public function view(User $user, Post $post): bool
    {
        return $user->isAdmin() || $post->user_id == $user->id;
    }

    public function create(User $user): bool
    {
      return $user->isAdmin();
    }

    public function update(User $user, Post $post): bool
    {
      return $user->isAdmin() || $post->user_id == $user->id;
    }

    public function delete(User $user, Post $post): bool
    {
      return $user->isAdmin() || $post->user_id == $user->id;
    }

    public function restore(User $user, Post $post): bool
    {
      return $user->isAdmin() || $post->user_id == $user->id;
    }

    public function forceDelete(User $user, Post $post): bool
    {
      return $user->isAdmin() || $post->user_id == $user->id;
    }
}
