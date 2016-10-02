<?php

namespace App\Http\Middleware;

use \Closure;
use Illuminate\Support\Facades\Lang;
use Lavary\Menu\Menu;

class DashboardMenu
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $menu = new Menu();
        $menu->make(
            'dashboardButtons',
            function ($menu) {

                $menu->add(
                    Lang::get('guru.bus'),
                    [
                        'url' => url('customer/transit'),
                        'imageUrl' => 'fa fa-bus',
                        'imageGreyUrl' => 'img/greyicon/6c.png'
                    ]
                );

                $menu->add(
                    Lang::get('guru.taxi'),
                    [
                        'url' => url('customer/taxi'),
                        'imageUrl' => 'fa fa-cab',
                        'imageGreyUrl' => ''
                    ]
                );

                $menu->add(
                    Lang::get('guru.flights'),
                    [
                        'url' => url('customer/taxi'),
                        'imageUrl' => 'fa fa-plane',
                        'imageGreyUrl' => ''
                    ]
                );

                $menu->add(
                    Lang::get('guru.shipping'),
                    [
                        'url' => url('customer/shipping'),
                        'imageUrl' => 'fa fa-paper-plane',
                        'imageGreyUrl' => ''
                    ]
                );

                $menu->add(
                    Lang::get('guru.haulage'),
                    [
                        'url' => url('customer/haulage'),
                        'imageUrl' => 'fa fa-truck',
                        'imageGreyUrl' => ''
                    ]
                );

                $menu->add(
                    Lang::get('guru.tow'),
                    [
                        'url' => url('customer/haulage'),
                        'imageUrl' => 'fa fa-chain',
                        'imageGreyUrl' => ''
                    ]
                );
            }
        );

        return $next($request);
    }
}
