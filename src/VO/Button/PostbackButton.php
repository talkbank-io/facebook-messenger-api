<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\Button;

use Cryonighter\Facebook\Messenger\Send\Exception\ValueException;
use Cryonighter\Facebook\Messenger\Send\VO\ButtonTitle;
use Cryonighter\Facebook\Messenger\Send\VO\Type\ButtonType;

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
     * @param ButtonTitle $title
     * @param string      $payload
     *
     * @throws ValueException
     */
    public function __construct(ButtonTitle $title, string $payload)
    {
        if (!preg_match('/^.{1,1000}$/', $payload)) {
            throw new ValueException("The button's payload can not exceed 1000 characters");
        }

        $this->title = $title;
        $this->payload = $payload;

        parent::__construct(new ButtonType(ButtonType::TYPE_POSTBACK));
    }
}
