<?php

namespace App\Http\Middleware;

use \Closure;
use Menu;
use Illuminate\Support\Facades\Lang;

class CustomerNavigation
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Menu::make(
            'customerNav',
            function ($menu) {

                $menu->add(
                    Lang::get('operator.home'),
                    [
                        'url' => url('customer/dashboard'),
                        'class' => 'home',
                        'imageUrl' => 'img/icon/iconmonstr-home-6-240.png',
                        'imageGreyUrl' => 'img/greyicon/6c.png'
                    ]
                );

                $menu->add(
                    Lang::get('operator.account'),
                    [
                        'url' => url('customer/account'),
                        'class' => 'home',
                        'imageUrl' => 'img/icon/iconmonstr-user-1-240.png',
                        'imageGreyUrl' => 'img/greyicon/5c.png'
                    ]
                );

                $menu->add(
                    Lang::get('operator.my_trips'),
                    [
                        'url' => url('customer/trips'),
                        'class' => 'home',
                        'imageUrl' => 'img/icon/iconmonstr-user-1-240.png',
                        'imageGreyUrl' => 'img/greyicon/4c.png'
                    ]
                );

                $menu->add(
                    Lang::get('guru.message'),
                    [
                        'url' => url('customer/payments'),
                        'class' => 'home',
                        'imageUrl' => 'img/icon/iconmonstr-user-1-240.png',
                        'imageGreyUrl' => 'img/greyicon/3c.png'
                    ]
                );

                $menu->add(
                    Lang::get('operator.notice'),
                    [
                        'url' => url('customer/notifications'),
                        'class' => 'home',
                        'imageUrl' => 'img/icon/iconmonstr-user-1-240.png',
                        'imageGreyUrl' => 'img/greyicon/2c.png'
                    ]
                );
            }
        );

        return $next($request);
    }
}
