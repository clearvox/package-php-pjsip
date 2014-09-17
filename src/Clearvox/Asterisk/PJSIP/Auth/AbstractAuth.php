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
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $authType;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var int
     */
    protected $nonceLifetime;

    /**
     * @var string
     */
    protected $realm;

    public function __construct($name, $authType)
    {
        $this->name     = $name;
        $this->authType = $authType;
    }

    /**
     * Get the Name(id) nfor this Authorization block
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the set authorization type.
     *
     * @return string
     */
    public function getAuthType()
    {
        return $this->authType;
    }

    /**
     * Set the Username for this authorization block
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Return the Username for this Block.
     *
     * @return string
     */
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