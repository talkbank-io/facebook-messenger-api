<?php

namespace Cryonighter\Facebook\Messenger\VO;

use Cryonighter\Facebook\Messenger\Exception\ValueException;
use JsonSerializable;

class ButtonTitle implements JsonSerializable
{
    use OneValueTrait;

    /**
     * @param string $value
     *
     * @throws ValueException
     */
    public function __construct(string $value)
    {
        if (!preg_match('/^.{1,20}$/u', $value)) {
            throw new ValueException("The button's title can not exceed 20 characters");
        }

        $this->value = $value;
    }
}
