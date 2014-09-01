<?php
namespace Clearvox\Asterisk\PJSIP\Auth;

use Clearvox\Asterisk\PJSIP\TypeInterface;

/**
 * Authentication sections hold the options and credentials related to inbound
 * or outbound authentication. You'll associate other sections such as endpoints
 * or registrations to this one. Multiple endpoints or registrations can use a
 * single auth config if needed.
 *
 * @category Clearvox
 * @package Asterisk
 * @subpackage PJSIP\Auth
 * @author Leon Rowland <leon@rowland.nl>
 */
abstract class AbstractAuth implements TypeInterface
{
    protected $name;

    protected $authType;

    protected $username;

    protected $nonceLifetime;

    protected $realm;

    public function __construct($name, $authType)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAuthType()
    {
        return $this->authType;
    }

    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param int $lifetime
     * @return $this
     */
    public function setNonceLifetime($lifetime)
    {
        $this->nonceLifetime = $lifetime;
        return $this;
    }

    public function getNonceLifetime()
    {
        return $this->nonceLifetime;
    }

    /**
     * @param string $realm
     * @return $this
     */
    public function setRealm($realm)
    {
        $this->realm = $realm;
        return $this;
    }

    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * Return the TYPE as defined for PJSIP in Asterisk.
     *
     * @return string
     */
    public function getType()
    {
        return 'auth';
    }
}