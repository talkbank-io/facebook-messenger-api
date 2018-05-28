<?php

namespace Cryonighter\Facebook\Messenger\Send\VO;

use JsonSerializable;

class ButtonType implements JsonSerializable
{
    use OneValueTrait;

    public const TYPE_POSTBACK = 'postback';
}
