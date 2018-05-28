<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\Button;

use Cryonighter\Facebook\Messenger\Send\VO\ButtonType;
use JsonSerializable;

abstract class Button implements JsonSerializable
{
    /**
     * @var ButtonType
     */
    private $type;

    /**
     * @param ButtonType $type
     */
    public function __construct(ButtonType $type)
    {
        $this->type = $type;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return ['type' => $this->type];
    }
}
