<?php

namespace Cryonighter\Facebook\Messenger\VO\Type;

class QuickReplyType extends Type
{
    public const TYPE_LOCATION = 'location';
    public const TYPE_TEXT = 'text';
    public const TYPE_USER_EMAIL = 'user_email';
    public const TYPE_USER_PHONE = 'user_phone_number';

    /**
     * @return array
     */
    protected static function getTypes(): array
    {
        return [
            self::TYPE_LOCATION,
            self::TYPE_TEXT,
            self::TYPE_USER_EMAIL,
            self::TYPE_USER_PHONE,
        ];
    }
}
