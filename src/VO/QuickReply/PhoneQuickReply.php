<?php

namespace Cryonighter\Facebook\Messenger\VO\QuickReply;

use Cryonighter\Facebook\Messenger\VO\Type\QuickReplyType;

class PhoneQuickReply extends QuickReply
{
    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @param string $imageUrl
     */
    public function __construct(string $imageUrl = '')
    {
        parent::__construct(new QuickReplyType(QuickReplyType::TYPE_USER_PHONE));

        $this->imageUrl = $imageUrl;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return parent::jsonSerialize() + ['image_url' => $this->imageUrl];
    }
}
