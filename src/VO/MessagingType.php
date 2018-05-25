<?php

namespace Cryonighter\Facebook\Messenger\Send\VO;

use Cryonighter\Facebook\Messenger\Send\Exception\ValueException;
use JsonSerializable;

class MessagingType implements JsonSerializable
{
    use OneValueTrait;

    public const TYPE_RESPONSE = 'RESPONSE';
    public const TYPE_UPDATE = 'UPDATE';
    public const TYPE_MESSAGE_TAG = 'MESSAGE_TAG';

    private const TYPES = [
        self::TYPE_RESPONSE,
        self::TYPE_UPDATE,
        self::TYPE_MESSAGE_TAG,
    ];

    /**
     * @param string $value
     *
     * @throws ValueException
     */
    public function __construct(string $value)
    {
        if (!in_array($value, self::TYPES)) {
            throw new ValueException('Invalid argument value');
        }

        $this->value = $value;
    }
}
