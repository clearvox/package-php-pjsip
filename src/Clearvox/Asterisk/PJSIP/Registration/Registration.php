<?php
namespace Clearvox\Asterisk\PJSIP\Registration;

use Clearvox\Asterisk\PJSIP\TypeInterface;

class Registration implements TypeInterface
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $authRejectionPermanent;

    /**
     * @var string
     */
    protected $clientUri;

    /**
     * @var string
     */
    protected $contactUser;

    /**
     * @var int
     */
    protected $expiration;

    /**
     * @var int
     */
    protected $maxRetries;

    /**
     * @var string
     */
    protected $outboundAuth;

    /**
     * @var string
     */
    protected $outboundProxy;

    /**
     * @var int
     */
    protected $retryInterval;

    /**
     * @var int
     */
    protected $fatalRetryInterval;

    /**
     * @var int
     */
    protected $forbiddenRetryInterval;

    /**
     * @var string
     */
    protected $serverUri;

    /**
     * @var string
     */
    protected $transport;

    /**
     * @var string
     */
    protected $supportPath;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getID()
    {
        return $this->id;
    }

    /**
     * @param string $authRejectionPermanent
     * @return Registration
     */
    public function setAuthRejectionPermanent($authRejectionPermanent)
    {
        $this->authRejectionPermanent = $authRejectionPermanent;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthRejectionPermanent()
    {
        return $this->authRejectionPermanent;
    }

    /**
     * @param string $clientUri
     * @return Registration
     */
    public function setClientUri($clientUri)
    {
        $this->clientUri = $clientUri;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientUri()
    {
        return $this->clientUri;
    }

    /**
     * @param string $contactUser
     * @return Registration
     */
    public function setContactUser($contactUser)
    {
        $this->contactUser = $contactUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactUser()
    {
        return $this->contactUser;
    }

    /**
     * @param int $expiration
     * @return Registration
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * @param int $forbiddenRetryInterval
     * @return Registration
     */
    public function setForbiddenRetryInterval($forbiddenRetryInterval)
    {
        $this->forbiddenRetryInterval = $forbiddenRetryInterval;
        return $this;
    }

    /**
     * @return int
     */
    public function getForbiddenRetryInterval()
    {
        return $this->forbiddenRetryInterval;
    }

    /**
     * @param int $maxRetries
     * @return Registration
     */
    public function setMaxRetries($maxRetries)
    {
        $this->maxRetries = $maxRetries;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxRetries()
    {
        return $this->maxRetries;
    }

    /**
     * @param string $outboundAuth
     * @return Registration
     */
    public function setOutboundAuth($outboundAuth)
    {
        $this->outboundAuth = $outboundAuth;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutboundAuth()
    {
        return $this->outboundAuth;
    }

    /**
     * @param string $outboundProxy
     * @return Registration
     */
    public function setOutboundProxy($outboundProxy)
    {
        $this->outboundProxy = $outboundProxy;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutboundProxy()
    {
        return $this->outboundProxy;
    }

    /**
     * @param int $retryInterval
     * @return Registration
     */
    public function setRetryInterval($retryInterval)
    {
        $this->retryInterval = $retryInterval;
        return $this;
    }

    /**
     * @return int
     */
    public function getRetryInterval()
    {
        return $this->retryInterval;
    }

    /**
     * @param int $fatalRetryInterval
     * @return Registration
     */
    public function setFatalRetryInterval($fatalRetryInterval)
    {
        $this->fatalRetryInterval = $fatalRetryInterval;
        return $this;
    }

    /**
     * @return int
     */
    public function getFatalRetryInterval()
    {
        return $this->fatalRetryInterval;
    }

    /**
     * @param string $serverUri
     * @return Registration
     */
    public function setServerUri($serverUri)
    {
        $this->serverUri = $serverUri;
        return $this;
    }

    /**
     * @return string
     */
    public function getServerUri()
    {
        return $this->serverUri;
    }

    /**
     * @param string $supportPath
     * @return Registration
     */
    public function setSupportPath($supportPath)
    {
        $this->supportPath = $supportPath;
        return $this;
    }

    /**
     * @return string
     */
    public function getSupportPath()
    {
        return $this->supportPath;
    }

    /**
     * @param string $transport
     * @return Registration
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Return the TYPE as defined for PJSIP in Asterisk.
     *
     * @return string
     */
    public function getType()
    {
        return 'registration';
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return array(
            'id'                       => $this->id,
            'auth_rejection_permanent' => $this->authRejectionPermanent,
            'client_uri'               => $this->clientUri,
            'contact_user'             => $this->contactUser,
            'expiration'               => $this->expiration,
            'max_retries'              => $this->maxRetries,
            'outbound_auth'            => $this->outboundAuth,
            'outbound_proxy'           => $this->outboundProxy,
            'retry_interval'           => $this->retryInterval,
            'fatal_retry_interval'     => $this->fatalRetryInterval,
            'forbidden_retry_interval' => $this->forbiddenRetryInterval,
            'server_uri'               => $this->serverUri,
            'transport'                => $this->transport,
            'support_path'             => $this->supportPath
        );
    }
}