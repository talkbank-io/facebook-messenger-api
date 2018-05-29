<?php

namespace Cryonighter\Facebook\Messenger\Response;

use Cryonighter\Facebook\Messenger\VO\MessageId;

class MessageResponse
{
    /**
     * @var MessageId
     */
    private $messageId;

    /**
     * @param MessageId $messageId
     */
    public function __construct(MessageId $messageId)
    {
        $this->messageId = $messageId;
    }

    /**
     * @return MessageId
     */
    public function getMessageId(): MessageId
    {
        return $this->messageId;
    }
}
