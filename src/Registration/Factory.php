<?php

namespace guru\Registration;

use guru\Registration\Handlers\Dummy;
use guru\Registration\Handlers\Operator;
use guru\Registration\Handlers\User;
use Illuminate\Contracts\Auth\Guard;

class Factory
{
    /**
     * @param $type
     * @param Guard $auth
     *
     * @return Registration
     */
    public static function createRegistrationType($type, Guard $auth)
    {
        switch ($type) {
            case \App\User::OPERATOR:
                return new Operator(url('/operator/dashboard'), $auth);
                break;
            case \App\User::CUSTOMER:
                return new User(url('/customer/dashboard'), $auth);
                break;
            default:
                return new Dummy(url('/dummy/dashboard'), $auth);
        }
    }
}
