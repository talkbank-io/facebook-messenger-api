<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\QuickReply;

class PhoneQuickReply extends QuickReply
{
    /**
     * @var string
     */
    protected $contentType = 'user_phone_number';

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
