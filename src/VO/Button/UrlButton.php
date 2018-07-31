<?php

namespace Cryonighter\Facebook\Messenger\VO\Button;

use Cryonighter\Facebook\Messenger\Exception\ValueException;
use Cryonighter\Facebook\Messenger\VO\ButtonTitle;
use Cryonighter\Facebook\Messenger\VO\Type\ButtonType;

/**
 * 
 * @see https://developers.facebook.com/docs/messenger-platform/reference/buttons/url
 */
class UrlButton extends Button
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $url;

    /**
     * @param ButtonTitle $title
     * @param string      $url
     *
     * @throws ValueException
     */
    public function __construct(ButtonTitle $title, string $url)
    {
        $this->title = $title;
        $this->url   = $url;
        parent::__construct(new ButtonType(ButtonType::TYPE_URL));
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
                'url'   => $this->url,
            ]
        );
    }
}
