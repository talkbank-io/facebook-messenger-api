<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\Message;

use Cryonighter\Facebook\Messenger\Send\VO\Attachment\Attachment;

class AttachmentMessage extends Message
{
    /**
     * @var Attachment
     */
    private $attachment;

    /**
     * @param Attachment $attachment
     */
    public function __construct(Attachment $attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'attachment' => $this->attachment,
        ];
    }
}
