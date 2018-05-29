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
     * @var bool
     */
    private $sharable;

    /**
     * @param string           $text
     * @param array | Button[] $buttons
     * @param bool             $sharable
     *
     * @throws ValueException
     */
    public function __construct(string $text, array $buttons, bool $sharable = false)
    {
        if (empty($text)) {
            throw new ValueException('Text message can not be empty');
        }

        if (!preg_match('/^.{1,640}$/u', $text)) {
            throw new ValueException('Text message can not exceed 640 characters');
        }

        if (empty($buttons)) {
            throw new ValueException('List of buttons can not be empty');
        }

        if (count($buttons) > 3) {
            throw new ValueException('The button list can not contain more than 3 items');
        }

        $this->text = $text;
        $this->buttons = $buttons;
        $this->sharable = $sharable;

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
