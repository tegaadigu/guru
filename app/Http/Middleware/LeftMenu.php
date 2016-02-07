<?php

namespace App\Http\Middleware;

use Closure;
use Menu;

class LeftMenu
{
    public $attributes;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Menu::make('leftNav', function($menu){

                            $menu->add('Home');
                            $menu->add('Safety Tips');
                            $menu->add('Be a transporter');
                            $menu->add('account');
                            $menu->raw('empty', ['class'=>'embeded-list']);
                            $menu->empty->add('profile');
                            $menu->empty->add('trip history');
                            $menu->empty->add('Rewards');
                            $menu->empty->add('help');
                            $menu->add('careers');
                            $menu->add('Contacts');
                            });

        return $next($request);
    }
}
