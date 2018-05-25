<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\Attachment;

use Cryonighter\Facebook\Messenger\Send\VO\AttachmentType;
use Cryonighter\Facebook\Messenger\Send\VO\Payload\AttachmentUrlData;

class AudioAttachment extends Attachment
{
    /**
     * @param AttachmentUrlData $attachmentUrlData
     */
    public function __construct(AttachmentUrlData $attachmentUrlData)
    {
        parent::__construct($attachmentUrlData, new AttachmentType(AttachmentType::TYPE_AUDIO));
    }
}
