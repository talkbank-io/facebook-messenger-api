<?php

namespace Cryonighter\Facebook\Messenger\VO\Message;

use Cryonighter\Facebook\Messenger\VO\Attachment\Attachment;

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
