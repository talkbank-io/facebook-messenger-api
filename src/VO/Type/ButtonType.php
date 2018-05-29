<?php

namespace Cryonighter\Facebook\Messenger\VO\Type;

class ButtonType extends Type
{
    public const TYPE_POSTBACK = 'postback';

    /**
     * @return array
     */
    protected static function getTypes(): array
    {
        return [
            self::TYPE_POSTBACK,
        ];
    }
}
