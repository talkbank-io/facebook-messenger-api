<?php

namespace Cryonighter\Facebook\Messenger\VO\QuickReply;

use Cryonighter\Facebook\Messenger\VO\Type\QuickReplyType;

class LocationQuickReply extends QuickReply
{
    public function __construct()
    {
        parent::__construct(new QuickReplyType(QuickReplyType::TYPE_LOCATION));
    }
}
