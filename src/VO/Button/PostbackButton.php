<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\Button;

use Cryonighter\Facebook\Messenger\Send\VO\ButtonType;

class PostbackButton extends Button
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
     * @param string $title
     * @param string $payload
     */
    public function __construct(string $title, string $payload)
    {
        parent::__construct(new ButtonType(ButtonType::TYPE_POSTBACK));

        $this->title = $title;
        $this->payload = $payload;
    }
}
