<?php

use Clearvox\Asterisk\PJSIP\AOR\AOR;

class AORTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var AOR
     */
    public $aor;

    public function setUp()
    {
        $this->aor = new AOR('6001');
    }

    public function testToArray()
    {
        $this->aor
            ->setContact('sip:192.168.1.1:5060')
            ->setMaxContacts(5);

        $expected = array(
            'name'                 => '6001',
            'contact'              => 'sip:192.168.1.1:5060',
            'default_expiration'   => null,
            'mailboxes'            => null,
            'max_contacts'         => 5,
            'minimum_expiration'   => null,
            'remove_existing'      => null,
            'qualify_frequency'    => null,
            'authenticate_qualify' => null,
            'maximum_expiration'   => null,
            'outbound_proxy'       => null,
            'support_path'         => null
        );

        $this->assertEquals($expected, $this->aor->toArray());
    }
}
 