<?php

namespace Cryonighter\Facebook\Messenger\Send\VO;

use JsonSerializable;

class TemplateType implements JsonSerializable
{
    use OneValueTrait;

    public const TYPE_BUTTON = 'button';
}
