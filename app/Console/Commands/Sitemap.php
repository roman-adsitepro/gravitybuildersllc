<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Tags\Url;
use Spatie\Sitemap\Sitemap as SpatieSitemap;

class Sitemap extends Command
{
    protected $signature = 'app:sitemap';

    protected $description = 'Generate Sitemap';

    public function handle()
    {
      SpatieSitemap::create()
        ->add(Url::create(config('app.url')))
        ->add(Url::create(route('services')))
        ->add(Url::create(route('reviews')))
        ->add(Url::create(route('contact')))
        ->add(Url::create(route('about')))
        ->add(Url::create(route('faq')))
        ->writeToFile('public/sitemap.xml');
    }
}
