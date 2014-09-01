<?php
namespace Clearvox\Asterisk\PJSIP;

interface TypeInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * Return the TYPE as defined for PJSIP in Asterisk.
     *
     * @return string
     */
    public function getType();

    /**
     * @return array
     */
    public function toArray();
}