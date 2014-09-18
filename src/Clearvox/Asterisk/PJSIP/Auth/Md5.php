<?php
namespace Clearvox\Asterisk\PJSIP\Auth;

class Md5 extends AbstractAuth
{
    protected $md5Cred;

    public function __construct($id)
    {
        parent::__construct($id, 'md5');
    }

    public function hashAndSetMd5Cred($plainText)
    {
        $this->md5Cred = md5($plainText);
        return $this;
    }

    public function setMd5Cred($md5)
    {
        $this->md5Cred = $md5;
        return $this;
    }

    public function getMd5Cred()
    {
        return $this->md5Cred;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return array(
            'id'             => $this->id,
            'auth_type'      => $this->authType,
            'nonce_lifetime' => $this->nonceLifetime,
            'md5_cred'       => $this->md5Cred,
            'username'       => $this->username,
            'realm'          => $this->realm,
        );
    }
}