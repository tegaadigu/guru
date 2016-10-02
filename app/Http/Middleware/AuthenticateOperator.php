<?php

namespace App\Http\Middleware;

use App\Models\Operator;
use Closure;
use guru\Registration\Handlers\Operator as OperatorHandler;
use Illuminate\Contracts\Auth\Guard;
use Menu;
use Illuminate\Support\Facades\Lang;

class AuthenticateOperator
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Menu::make(
            'operatorNav',
            function ($menu) {

                $menu->add(
                    Lang::get('operator.home'),
                    [
                        'url' => url('operator/dashboard'),
                        'class' => 'home',
                    ]
                );
                $menu->add(
                    Lang::get('operator.counter_man'),
                    [
                        'url' => url('operator/counter'),
                        'class' => 'overview',
                    ]
                );
                $menu->add(
                    Lang::get('operator.vehicle'),
                    [
                        'url' => url('operator/vehicle'),
                        'class' => 'cars',
                    ]
                );
                $menu->add(
                    Lang::get('operator.my_trips'),
                    [
                        'url' => url('operator/trips'),
                        'class' => 'trips',
                    ]
                );
                if ($this->auth->check() && $this->auth->user()->account_type === OperatorHandler::CORPORATE) {
                    $menu->add(
                        Lang::get('operator.drivers'),
                        [
                            'url' => url('operator/drivers'),
                            'class' => 'drivers',
                        ]
                    );
                }
                $menu->add(
                    Lang::get('operator.trip_invoice'),
                    [
                        'url' => url('operator/invoice'),
                        'class' => 'invoices',
                    ]

                );
            }
        );

        return $next($request);
    }
}
