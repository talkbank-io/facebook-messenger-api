<?php

namespace Cryonighter\Facebook\Messenger\VO\Button;

use Cryonighter\Facebook\Messenger\Exception\ValueException;
use Cryonighter\Facebook\Messenger\VO\ButtonTitle;
use Cryonighter\Facebook\Messenger\VO\Type\ButtonType;

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
        if (!preg_match('/^.{1,1000}$/u', $payload)) {
            throw new ValueException("The button's payload can not exceed 1000 characters");
        }

        $this->title = $title;
        $this->payload = $payload;

        parent::__construct(new ButtonType(ButtonType::TYPE_POSTBACK));
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
            ]
        );
    }
}
