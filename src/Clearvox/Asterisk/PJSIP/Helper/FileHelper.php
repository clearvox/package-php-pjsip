<?php
namespace Clearvox\Asterisk\PJSIP\Helper;

use Clearvox\Asterisk\PJSIP\TypeInterface;

class FileHelper
{
    public function asString(TypeInterface $pjsipType)
    {
        $content  = "[{$pjsipType->getName()}]\n";
        $content .= "type={$pjsipType->getType()}\n";
        
        foreach ($pjsipType->toArray() as $field => $value) {
            $content .= "{$field}={$value}\n";
        }
        $content .= "\n";

        return $content;
    }
}