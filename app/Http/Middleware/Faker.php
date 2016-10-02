<?php

namespace App\Http\Middleware;

use Closure;

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
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Faker\Provider\Lorem($faker));
        $faker->addProvider(new \Faker\Provider\Image($faker));
        $faker->addProvider(new \Faker\Provider\PhoneNumber($faker));
        \View::share('faker', $faker);
        return $next($request);
    }
}
