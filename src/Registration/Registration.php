<?php

namespace guru\Registration;

use Illuminate\Http\JsonResponse;

abstract class Registration
{
    /**
     * @var string
     */
    protected $redirectUrl;

    /**
     * @param array $data
     *
     * @return JsonResponse
     */
    abstract public function register(array $data);

    abstract public function login(array $credentials);

    /**
     * Registration constructor.
     *
     * @param $redirectUrl
     */
    public function __construct($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }

    /**
     * @return string
     */
    protected function getRedirectUrl(){
        return $this->redirectUrl;
    }
}
