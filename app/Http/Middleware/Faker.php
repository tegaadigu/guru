<?php

namespace App\Http\Middleware;

use Closure;
use Faker\Factory;
use Faker\Provider\Lorem;
use Faker\Provider\Image;
use Faker\Provider\PhoneNumber;

class Faker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $faker = Factory::create();
        $faker->addProvider(new Lorem($faker));
        $faker->addProvider(new Image($faker));
        $faker->addProvider(new PhoneNumber($faker));
        \View::share('faker', $faker);
        return $next($request);
    }
}
