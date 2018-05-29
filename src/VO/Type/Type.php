<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\Type;

use Cryonighter\Facebook\Messenger\Send\Exception\ValueException;
use Cryonighter\Facebook\Messenger\Send\VO\OneValueTrait;
use JsonSerializable;

abstract class Type implements JsonSerializable
{
    use OneValueTrait;

    /**
     * @return array
     */
    abstract protected static function getTypes(): array;

    /**
     * @param string $value
     *
     * @throws ValueException
     */
    public function __construct(string $value)
    {
        if (!in_array($value, self::getTypes())) {
            throw new ValueException('Invalid argument value');
        }

        $this->value = $value;
    }
}
