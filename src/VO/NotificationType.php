<?php

namespace Cryonighter\Facebook\Messenger\Send\VO;

use Cryonighter\Facebook\Messenger\Send\Exception\ValueException;
use JsonSerializable;

class NotificationType implements JsonSerializable
{
    use OneValueTrait;

    public const TYPE_REGULAR = 'REGULAR';
    public const TYPE_SILENT_PUSH = 'SILENT_PUSH';
    public const TYPE_NO_PUSH = 'NO_PUSH';

    private const TYPES = [
        self::TYPE_REGULAR,
        self::TYPE_SILENT_PUSH,
        self::TYPE_NO_PUSH,
    ];

    /**
     * @param string $value
     *
     * @throws ValueException
     */
    public function __construct(string $value = self::TYPE_REGULAR)
    {
        if (!in_array($value, self::TYPES)) {
            throw new ValueException('Invalid argument value');
        }

        $this->value = $value;
    }
}
