<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\Attachment;

use Cryonighter\Facebook\Messenger\Send\VO\AttachmentType;
use Cryonighter\Facebook\Messenger\Send\VO\Payload\Template;

class TemplateAttachment extends Attachment
{
    /**
     * @param Template $template
     */
    public function __construct(Template $template)
    {
        parent::__construct($template, new AttachmentType(AttachmentType::TYPE_TEMPLATE));
    }
}
