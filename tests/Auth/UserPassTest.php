<?php

use Clearvox\Asterisk\PJSIP\Auth\UserPass;

class UserPassTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var UserPass
     */
    public $userPass;

    public function setUp()
    {
        $this->userPass = new UserPass('8000');
    }

    public function testSetPassword()
    {
        $this->userPass->setPassword('testing');
        $this->assertEquals('testing', $this->userPass->getPassword());
    }

    public function testToArray()
    {
        $this->userPass
            ->setRealm('TestingRealm')
            ->setUsername('11111')
            ->setPassword('testing')
            ->setNonceLifetime(50);

        $expected = array(
            'auth_type' => 'userpass',
            'nonce_lifetime' => 50,
            'password' => 'testing',
            'username' => '11111',
            'realm' => 'TestingRealm'
        );

        $this->assertEquals($expected, $this->userPass->toArray());
    }

}
 