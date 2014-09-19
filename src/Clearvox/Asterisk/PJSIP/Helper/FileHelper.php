<?php
namespace Clearvox\Asterisk\PJSIP\Helper;

use Clearvox\Asterisk\PJSIP\TypeInterface;

class FileHelper
{
    public function asString(TypeInterface $pjsipType)
    {
        $content  = "[{$pjsipType->getID()}]\n";
        $content .= "type={$pjsipType->getType()}\n";

        $pjsipValues = $pjsipType->toArray();
        unset($pjsipValues['id']);

        foreach ($pjsipValues as $field => $value) {
            if(!is_null($value)) {
                $content .= "{$field}={$value}\n";
            }
        }
        $content .= "\n";

        return $content;
    }
}