<?php

namespace Cryonighter\Facebook\Messenger\Send\VO;

use Cryonighter\Facebook\Messenger\Send\Exception\ValueException;

class ButtonTitle
{
    use OneValueTrait;

    public function __construct(string $value)
    {
        if (!preg_match('/^.{1,20}$/', $value)) {
            throw new ValueException("The button's title can not exceed 20 characters");
        }

        $this->value = $value;
    }
}