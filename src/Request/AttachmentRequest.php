<?php

namespace Cryonighter\Facebook\Messenger\Request;

use Cryonighter\Facebook\Messenger\VO\Message\AttachmentMessage;

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
