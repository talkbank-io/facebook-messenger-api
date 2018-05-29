<?php

namespace Cryonighter\Facebook\Messenger\VO\Attachment;

use Cryonighter\Facebook\Messenger\VO\Payload\AttachmentUrlData;
use Cryonighter\Facebook\Messenger\VO\Type\AttachmentType;

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
