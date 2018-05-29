<?php

namespace Cryonighter\Facebook\Messenger\Response;

use Cryonighter\Facebook\Messenger\VO\Recipient\RecipientId;
use Cryonighter\Facebook\Messenger\VO\MessageId;

class RecipientMessageResponse extends MessageResponse
{
    /**
     * @var RecipientId
     */
    private $recipientId;

    /**
     * @param MessageId   $messageId
     * @param RecipientId $recipientId
     */
    public function __construct(MessageId $messageId, RecipientId $recipientId)
    {
        parent::__construct($messageId);

        $this->recipientId = $recipientId;
    }

    /**
     * @return RecipientId
     */
    public function getRecipientId(): RecipientId
    {
        return $this->recipientId;
    }
}
