<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\QuickReply;

class EmailQuickReply extends QuickReply
{
    /**
     * @var string
     */
    protected $contentType = 'user_email';

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @param string $imageUrl
     */
    public function __construct(string $imageUrl = '')
    {
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
