<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\Type;

use Cryonighter\Facebook\Messenger\Send\Exception\ValueException;

class NotificationType extends Type
{
    public const TYPE_REGULAR = 'REGULAR';
    public const TYPE_SILENT_PUSH = 'SILENT_PUSH';
    public const TYPE_NO_PUSH = 'NO_PUSH';

    /**
     * @return array
     */
    protected static function getTypes(): array
    {
        return [
            self::TYPE_REGULAR,
            self::TYPE_SILENT_PUSH,
            self::TYPE_NO_PUSH,
        ];
    }

    /**
     * @param string $value
     *
     * @throws ValueException
     */
    public function __construct(string $value = self::TYPE_REGULAR)
    {
        parent::__construct($value);
    }
}
