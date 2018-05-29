<?php

namespace Cryonighter\Facebook\Messenger\VO\QuickReply;

use Cryonighter\Facebook\Messenger\VO\Type\QuickReplyType;

class TextQuickReply extends QuickReply
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $payload;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @param string $title
     * @param string $payload
     * @param string $imageUrl
     */
    public function __construct(string $title, string $payload = '', string $imageUrl = '')
    {
        parent::__construct(new QuickReplyType(QuickReplyType::TYPE_TEXT));

        $this->title = $title;
        $this->payload = $payload;
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return array_merge(
            parent::jsonSerialize(),
            [
                'title' => $this->title,
                'payload' => $this->payload,
                'image_url' => $this->imageUrl,
            ]
        );
    }
}
