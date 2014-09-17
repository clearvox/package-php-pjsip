<?php
namespace Clearvox\Asterisk\PJSIP\AOR;

use Clearvox\Asterisk\PJSIP\TypeInterface;

/**
 * A primary feature of AOR objects (Address of Record) is to tell Asterisk where an endpoint can be contacted.
 * Without an associated AOR section, an endpoint cannot be contacted. AOR objects also store associations to
 * mailboxes for MWI requests and other data that might relate to the whole group of contacts such as expiration
 * and qualify settings.
 *
 * When Asterisk receives an inbound registration, it'll look to match against available AORs.
 * Registrations: The name of the AOR section must match the user portion of the SIP URI in the
 * "To:" header of the inbound SIP registration. That will usually be the "user name" set in your hard or soft
 * phones configuration.
 *
 * @category Clearvox
 * @package
 * @subpackage
 * @author Leon Rowland <leon@rowland.nl>
 */
class AOR implements TypeInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $maxContacts;

    /**
     * @var string
     */
    protected $contact;

    /**
     * @var integer
     */
    protected $defaultExpiration;

    /**
     * @var string
     */
    protected $mailboxes;

    /**
     * @var int
     */
    protected $minimumExpiration;

    /**
     * @var int
     */
    protected $maximumExpiration;

    /**
     * @var bool
     */
    protected $removeExisting;

    /**
     * @var int
     */
    protected $qualifyFrequency;

    /**
     * @var
     */
    protected $authenticateQualify;

    /**
     * @var string
     */
    protected $outboundProxy;

    /**
     * @var string
     */
    protected $supportPath;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Limit the maximum number of contact creations. For example, if set to 10 we could allow 10
     * Sip user agents to be able to register against it.
     *
     * @param int $maxContacts
     * @return $this
     */
    public function setMaxContacts($maxContacts)
    {
        $this->maxContacts = $maxContacts;
        return $this;
    }

    /**
     * Return the max number of contacts to allow register.
     *
     * @return int
     */
    public function getMaxContacts()
    {
        return $this->maxContacts;
    }

    /**
     * @param string $contactLine
     * @return $this
     */
    public function setContact($contactLine)
    {
        $this->contact = $contactLine;
        return $this;
    }

    /**
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $authenticateQualify
     * @return AOR
     */
    public function setAuthenticateQualify($authenticateQualify)
    {
        $this->authenticateQualify = $authenticateQualify;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthenticateQualify()
    {
        return $this->authenticateQualify;
    }

    /**
     * @param int $defaultExpiration
     * @return AOR
     */
    public function setDefaultExpiration($defaultExpiration)
    {
        $this->defaultExpiration = $defaultExpiration;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultExpiration()
    {
        return $this->defaultExpiration;
    }

    /**
     * @param string $mailboxes
     * @return AOR
     */
    public function setMailboxes($mailboxes)
    {
        $this->mailboxes = $mailboxes;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailboxes()
    {
        return $this->mailboxes;
    }

    /**
     * @param int $maximumExpiration
     * @return AOR
     */
    public function setMaximumExpiration($maximumExpiration)
    {
        $this->maximumExpiration = $maximumExpiration;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaximumExpiration()
    {
        return $this->maximumExpiration;
    }

    /**
     * @param int $minimumExpiration
     * @return AOR
     */
    public function setMinimumExpiration($minimumExpiration)
    {
        $this->minimumExpiration = $minimumExpiration;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinimumExpiration()
    {
        return $this->minimumExpiration;
    }

    /**
     * @param string $outboundProxy
     * @return AOR
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
     * @param int $qualifyFrequency
     * @return AOR
     */
    public function setQualifyFrequency($qualifyFrequency)
    {
        $this->qualifyFrequency = $qualifyFrequency;
        return $this;
    }

    /**
     * @return int
     */
    public function getQualifyFrequency()
    {
        return $this->qualifyFrequency;
    }

    /**
     * @param boolean $removeExisting
     * @return AOR
     */
    public function setRemoveExisting($removeExisting)
    {
        $this->removeExisting = $removeExisting;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRemoveExisting()
    {
        return $this->removeExisting;
    }

    /**
     * @param string $supportPath
     * @return AOR
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
     * Return the TYPE as defined for PJSIP in Asterisk.
     *
     * @return string
     */
    public function getType()
    {
        return 'aor';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return array(
            'name'                 => $this->name,
            'contact'              => $this->contact,
            'default_expiration'   => $this->defaultExpiration,
            'mailboxes'            => $this->mailboxes,
            'max_contacts'         => $this->maxContacts,
            'minimum_expiration'   => $this->minimumExpiration,
            'remove_existing'      => $this->removeExisting,
            'qualify_frequency'    => $this->qualifyFrequency,
            'authenticate_qualify' => $this->authenticateQualify,
            'maximum_expiration'   => $this->maximumExpiration,
            'outbound_proxy'       => $this->outboundProxy,
            'support_path'         => $this->supportPath
        );
    }
}