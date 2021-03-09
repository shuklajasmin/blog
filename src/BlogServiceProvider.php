<?php
namespace Shukaljasmin\Blog;

use Illuminate\Support\ServiceProvider;
use phpDocumentor\Reflection\Types\This;

class BlogServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','blog');
        $this->loadMigrationsFrom(__DIR__.'/migrations','blog');

    }

    public function register()
    {
        # code...
    }
}