<?php

namespace Cryonighter\Facebook\Messenger\VO\QuickReply;

use Cryonighter\Facebook\Messenger\VO\Type\QuickReplyType;

class EmailQuickReply extends QuickReply
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
        parent::__construct(new QuickReplyType(QuickReplyType::TYPE_USER_EMAIL));

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
