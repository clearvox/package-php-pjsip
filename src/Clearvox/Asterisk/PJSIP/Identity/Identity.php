<?php

namespace Clearvox\Asterisk\PJSIP\Identity;

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
 * @author   Leon Rowland <leon@rowland.nl>
 */
class Identity implements TypeInterface
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $endpoint;
    /**
     * @var string
     */
    public $match;
    /**
     * @var string
     */
    public $srvLookups;
    /**
     * @var string
     */
    public $matchHeader;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Return the TYPE as defined for PJSIP in Asterisk.
     *
     * @return string
     */
    public function getType()
    {
        return 'identify';
    }

    /**
     * @return string
     */
    public function getID()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param string $endpoint
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * @return string
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * @param string $match
     */
    public function setMatch($match)
    {
        $this->match = $match;
    }

    /**
     * @return string
     */
    public function getSrvLookups()
    {
        return $this->srvLookups;
    }

    /**
     * @param string $srvLookups
     */
    public function setSrvLookups($srvLookups)
    {
        $this->srvLookups = $srvLookups;
    }

    /**
     * @return string
     */
    public function getMatchHeader()
    {
        return $this->matchHeader;
    }

    /**
     * @param string $matchHeader
     */
    public function setMatchHeader($matchHeader)
    {
        $this->matchHeader = $matchHeader;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'id'           => $this->id,
            'endpoint'     => $this->endpoint,
            'match'        => $this->match,
            'srv_lookups'  => $this->srvLookups,
            'match_header' => $this->matchHeader,
        ];
    }
}