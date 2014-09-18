<?php
namespace Clearvox\Asterisk\PJSIP\Auth;

class UserPass extends AbstractAuth
{
    protected $password;

    public function __construct($name)
    {
        parent::__construct($name, 'userpass');
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return array(
            'name'           => $this->name,
            'auth_type'      => $this->authType,
            'nonce_lifetime' => $this->nonceLifetime,
            'password'       => $this->password,
            'username'       => $this->username,
            'realm'          => $this->realm,
        );
    }
}