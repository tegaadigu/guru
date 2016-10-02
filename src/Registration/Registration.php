<?php

namespace guru\Registration;

use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\JsonResponse;

abstract class Registration
{
    /**
     * @var string
     */
    protected $redirectUrl;

    /**
     * @var Guard
     */
    protected $auth;

    /**
     * Registration constructor.
     *
     * @param $redirectUrl
     * @param Guard $auth
     */
    public function __construct($redirectUrl, Guard $auth)
    {
        $this->redirectUrl = $redirectUrl;
        $this->auth = $auth;
    }

    /**
     * @param array $data
     *
     * @return JsonResponse
     */
    abstract public function register(array $data);

    /**
     * @param array $credentials
     *
     * @return bool
     */
    public function login(array $credentials)
    {
        return $this->auth->attempt(
            [
                'email' => $credentials['email'],
                'password' => $credentials['password'],
                'type' => (int) $credentials['type'],
            ],
            true
        );
    }

    /**
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }
}
