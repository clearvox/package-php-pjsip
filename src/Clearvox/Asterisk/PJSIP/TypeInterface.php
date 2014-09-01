<?php
namespace Clearvox\Asterisk\PJSIP;

interface TypeInterface
{
    /**
     * Return the TYPE as defined for PJSIP in Asterisk.
     *
     * @return string
     */
    public function getType();
}