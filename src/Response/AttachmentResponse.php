<?php

namespace Cryonighter\Facebook\Messenger\Response;

use Cryonighter\Facebook\Messenger\VO\AttachmentId;

class AttachmentResponse
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
     * @return AttachmentId
     */
    public function getAttachmentId(): AttachmentId
    {
        return $this->attachmentId;
    }
}
