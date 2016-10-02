<?php

namespace guru\Helpers;

class Config
{
    /**
     * @return string
     */
    public function getCC()
    {
        return $_SERVER['CC'];
    }
}
