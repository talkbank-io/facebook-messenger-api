<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\Type;

class MessagingType extends Type
{
    public const TYPE_RESPONSE = 'RESPONSE';
    public const TYPE_UPDATE = 'UPDATE';
    public const TYPE_MESSAGE_TAG = 'MESSAGE_TAG';

    /**
     * @return array
     */
    protected static function getTypes(): array
    {
        return [
            self::TYPE_RESPONSE,
            self::TYPE_UPDATE,
            self::TYPE_MESSAGE_TAG,
        ];
    }
}
