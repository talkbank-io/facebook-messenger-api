<?php

namespace Cryonighter\Facebook\Messenger\Send\VO;

use Cryonighter\Facebook\Messenger\Send\Exception\ValueException;
use JsonSerializable;

class SenderAction implements JsonSerializable
{
    use OneValueTrait;

    public const ACTION_TYPING_ON = 'typing_on';
    public const ACTION_TYPING_OFF = 'typing_off';
    public const ACTION_MARK_SEEN = 'mark_seen';

    private const ACTIONS = [
        self::ACTION_TYPING_ON,
        self::ACTION_TYPING_OFF,
        self::ACTION_MARK_SEEN,
    ];

    /**
     * @param string $value
     *
     * @throws ValueException
     */
    public function __construct(string $value)
    {
        if (!in_array($value, self::ACTIONS)) {
            throw new ValueException('Invalid argument value');
        }

        $this->value = $value;
    }
}
