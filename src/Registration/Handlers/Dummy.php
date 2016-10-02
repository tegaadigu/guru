<?php

namespace guru\Registration\Handlers;

use guru\Registration\Registration;
use Illuminate\Http\JsonResponse;

class Dummy extends Registration
{

    CONST MESSAGE = ['success' => 0, 'errors' => ['email' => 'Account Type not recognized']];

    /**
     * @param array $data
     *
     * @return JsonResponse
     */
    public function register(array $data)
    {
        return json_encode(self::MESSAGE);
    }

    /**
     * @param array $credentials
     *
     * @return true
     */
    public function login(array $credentials)
    {
        return false;
    }
}
