<?php

namespace App\Providers;
use View;
use App\User;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::creating(function($user){
            $thema = 'thema';
            $body = '<p>...</p>';
            $email = $user->email;
            $header = 'From:@admin@tut.by';
            @mail ($email,$themsa,$body,$header);
        });
        View::composer('*','App\Providers\ViewComposers\SiteComposer');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
