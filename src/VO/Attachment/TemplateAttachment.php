<?php

namespace Cryonighter\Facebook\Messenger\VO\Attachment;

use Cryonighter\Facebook\Messenger\VO\Payload\Template;
use Cryonighter\Facebook\Messenger\VO\Type\AttachmentType;

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
