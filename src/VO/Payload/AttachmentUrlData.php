<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\Payload;

use JsonSerializable;

class AttachmentUrlData implements Payload, JsonSerializable
{
    /**
     * @var bool
     */
    private $isReusable;

    /**
     * @var
     */
    private $url;

    /**
     * @param string $url
     * @param bool   $isReusable
     */
    public function __construct(string $url, bool $isReusable = false)
    {
        $this->url = $url;
        $this->isReusable = $isReusable;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'is_reusable' => $this->isReusable,
            'url' => $this->url
        ];
    }
}
