<?php

namespace App\View\Components;

use App\Models\Review;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Reviews extends Component
{

  public function __construct()
  {
    //
  }


  public function render(): View|Closure|string
  {
    return view('components.reviews', [
      'featured' => Review::orderBy('created_at', 'desc')->featured()->get(),
      'reviews' => Review::orderBy('created_at', 'desc')->public()->get()
    ]);
  }
}
