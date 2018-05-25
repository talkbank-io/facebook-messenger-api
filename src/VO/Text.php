<?php

namespace Cryonighter\Facebook\Messenger\Send\VO;

use Cryonighter\Facebook\Messenger\Send\Exception\ValueException;
use JsonSerializable;

class Text implements JsonSerializable
{
    use OneValueTrait;

    /**
     * @param string $value
     *
     * @throws ValueException
     */
    public function __construct(string $value)
    {
        if (!preg_match('/.+/', $value)) {
            throw new ValueException('Text message cannot be empty');
        }

        if (!preg_match('//u', $value)) {
            throw new ValueException('Text message must be a UTF-8 encoded');
        }

        $this->value = $value;
    }
}
