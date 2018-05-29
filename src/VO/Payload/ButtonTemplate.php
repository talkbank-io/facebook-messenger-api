<?php

namespace Cryonighter\Facebook\Messenger\VO\Payload;

use Cryonighter\Facebook\Messenger\Exception\ValueException;
use Cryonighter\Facebook\Messenger\VO\Button\Button;
use Cryonighter\Facebook\Messenger\VO\Type\TemplateType;

class ButtonTemplate extends Template
{
    /**
     * @var string
     */
    private $text;

    /**
     * @var array
     */
    private $buttons;

    /**
     * @param string           $text
     * @param array | Button[] ...$buttons
     *
     * @throws ValueException
     */
    public function __construct(string $text, Button ...$buttons)
    {
        if (empty($buttons)) {
            throw new ValueException('List of buttons can not be empty');
        }

        if (count($buttons) > 3) {
            throw new ValueException('The button list can not contain more than 3 items');
        }

        $this->text = $text;
        $this->buttons = $buttons;

        parent::__construct(new TemplateType(TemplateType::TYPE_BUTTON));
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return array_merge(
            parent::jsonSerialize(),
            [
                'text' => $this->text,
                'buttons' => $this->buttons,
            ]
        );
    }
}
