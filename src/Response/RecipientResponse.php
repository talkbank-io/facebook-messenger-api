<?php

namespace Cryonighter\Facebook\Messenger\Response;

use Cryonighter\Facebook\Messenger\VO\Recipient\RecipientId;

class RecipientResponse
{
    /**
     * @var RecipientId
     */
    private $recipientId;

    /**
     * @param RecipientId $recipientId
     */
    public function __construct(RecipientId $recipientId)
    {
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
