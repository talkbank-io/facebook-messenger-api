<?php

namespace Cryonighter\Facebook\Messenger\VO\Type;

class ButtonType extends Type
{
    public const TYPE_POSTBACK = 'postback';
    public const TYPE_URL      = 'web_url';

    /**
     * @return array
     */
    protected static function getTypes(): array
    {
        return [
            self::TYPE_POSTBACK,
            self::TYPE_URL,
        ];
    }
}
