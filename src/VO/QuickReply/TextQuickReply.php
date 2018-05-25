<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\QuickReply;

class TextQuickReply extends QuickReply
{
    /**
     * @var string
     */
    protected $contentType = 'text';

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
