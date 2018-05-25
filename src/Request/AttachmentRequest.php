<?php

namespace Cryonighter\Facebook\Messenger\Send\Request;

use Cryonighter\Facebook\Messenger\Send\VO\Message\AttachmentMessage;

class AttachmentRequest extends Request
{
    /**
     * @var AttachmentMessage
     */
    private $message;

    /**
     * @param AttachmentMessage $message
     */
    public function __construct(AttachmentMessage $message) {
        $this->message = $message;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return ['message' => $this->message];
    }
}
