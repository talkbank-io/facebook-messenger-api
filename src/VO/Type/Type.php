<?php

namespace Cryonighter\Facebook\Messenger\VO\Type;

use Cryonighter\Facebook\Messenger\Exception\ValueException;
use Cryonighter\Facebook\Messenger\VO\OneValueTrait;
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
        if (!in_array($value, static::getTypes())) {
            throw new ValueException('Invalid argument value');
        }

        $this->value = $value;
    }
}
