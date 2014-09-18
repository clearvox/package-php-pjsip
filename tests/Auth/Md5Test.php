<?php

use Clearvox\Asterisk\PJSIP\Auth\Md5;

class Md5Test extends PHPUnit_Framework_TestCase
{
    /**
     * @var Md5
     */
    public $md5;

    public function setUp()
    {
        $this->md5 = new Md5('7000');
    }

    public function testHashAndSetHashesAsMd5()
    {
        $this->md5->hashAndSetMd5Cred('testing');
        $this->assertEquals(md5('testing'), $this->md5->getMd5Cred());
    }

    public function testNormalSetMd5Cred()
    {
        $this->md5->setMd5Cred(md5('asdasdasd'));
        $this->assertEquals(md5('asdasdasd'), $this->md5->getMd5Cred());
    }

    public function testToArray()
    {
        $this->md5
            ->setRealm('TestingRealm')
            ->setUsername('12345')
            ->hashAndSetMd5Cred('password')
            ->setNonceLifetime(50);

        $expected = array(
            'name'      => '7000',
            'auth_type' => 'md5',
            'nonce_lifetime' => 50,
            'md5_cred' => md5('password'),
            'username' => '12345',
            'realm' => 'TestingRealm'
        );

        $this->assertEquals($expected, $this->md5->toArray());
    }
}