<?php

namespace Cryonighter\Facebook\Messenger\Send\Request;

use Cryonighter\Facebook\Messenger\Send\VO\Recipient\Recipient;
use Cryonighter\Facebook\Messenger\Send\VO\SenderAction;

class SenderActionRequest extends Request
{
    /**
     * @var Recipient
     */
    private $recipient;

    /**
     * @var SenderAction
     */
    private $senderAction;

    /**
     * @param Recipient    $recipient
     * @param SenderAction $senderAction
     */
    public function __construct(Recipient $recipient, SenderAction $senderAction)
    {
        $this->recipient = $recipient;
        $this->senderAction = $senderAction;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'recipient' => $this->recipient,
            'sender_action' => $this->senderAction,
        ];
    }
}
