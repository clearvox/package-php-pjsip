<?php

namespace Clearvox\Asterisk\PJSIP\Identify;

use Clearvox\Asterisk\PJSIP\TypeInterface;

class Identify implements TypeInterface
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