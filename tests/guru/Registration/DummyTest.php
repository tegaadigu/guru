<?php

namespace guru\tests\Registration;

use guru\Registration\Handlers\Dummy;
use guru\Registration\Factory;
use Illuminate\Auth\Guard;

class DummyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnDummyAccount()
    {
        $auth = $this->getMockBuilder(Guard::class)->disableArgumentCloning()
            ->disableOriginalConstructor()
            ->setMethods(['attempt'])
            ->disableArgumentCloning()
            ->getMockForAbstractClass();

        $auth->method('attempt')->withAnyParameters()->willReturn(true);

        $service = new Dummy('user/', $auth);

        $resp = $service->login(['type'=>12, 'email' => 'test.test@gmail.com','password'=>'ahahaa']);

        self::assertEquals(false, $resp);
    }
}
