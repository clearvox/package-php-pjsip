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
     * Return the TYPE as defined for PJSIP in Asterisk.
     *
     * @return string
     */
    public function getType()
    {
        return 'aor';
    }
}