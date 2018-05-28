<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\Payload;

use Cryonighter\Facebook\Messenger\Send\VO\Button\Button;
use Cryonighter\Facebook\Messenger\Send\VO\TemplateType;

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
     * @param array | Button[] $buttons
     */
    public function __construct(string $text, array $buttons)
    {
        parent::__construct(new TemplateType(TemplateType::TYPE_BUTTON));

        // TODO: где-то читал, что более 3х кнопок недопустимо, надо проверить и провалидировать
        // TODO: и на пустоту тоже надо проверить

        $this->text = $text;
        $this->buttons = $buttons;
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
