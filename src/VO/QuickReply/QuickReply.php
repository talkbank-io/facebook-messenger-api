<?php

namespace Cryonighter\Facebook\Messenger\VO\QuickReply;

use Cryonighter\Facebook\Messenger\VO\Type\QuickReplyType;
use JsonSerializable;

abstract class QuickReply implements JsonSerializable
{
    /**
     * @var QuickReplyType
     */
    private $contentType;

    /**
     * @param QuickReplyType $contentType
     */
    protected function __construct(QuickReplyType $contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return ['content_type' => $this->contentType];
    }
}
