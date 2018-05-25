<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\QuickReply;

use JsonSerializable;

abstract class QuickReply implements JsonSerializable
{
    /**
     * @var string
     */
    protected $contentType;

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return ['content_type' => $this->contentType];
    }
}
