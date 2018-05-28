<?php

namespace Cryonighter\Facebook\Messenger\Send\VO;

use JsonSerializable;

/**
 * TODO: добавить константы тегов
 *
 * @see https://developers.facebook.com/docs/messenger-platform/send-messages/message-tags
 */
class Tag implements JsonSerializable
{
    use OneValueTrait;
}
