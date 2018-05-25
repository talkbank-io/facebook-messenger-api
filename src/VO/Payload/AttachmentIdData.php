<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\Payload;

use Cryonighter\Facebook\Messenger\Send\VO\AttachmentId;
use JsonSerializable;

class AttachmentIdData implements Payload, JsonSerializable
{
    /**
     * @var AttachmentId
     */
    private $attachmentId;

    /**
     * @param AttachmentId $attachmentId
     */
    public function __construct(AttachmentId $attachmentId)
    {
        $this->attachmentId = $attachmentId;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return ['attachment_id' => $this->attachmentId];
    }
}
