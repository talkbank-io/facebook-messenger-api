<?php

namespace Cryonighter\Facebook\Messenger\VO\Button;

use Cryonighter\Facebook\Messenger\VO\Type\ButtonType;
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
    protected function __construct(ButtonType $type)
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
