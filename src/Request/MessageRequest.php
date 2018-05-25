<?php

namespace Cryonighter\Facebook\Messenger\Send\Request;

use Cryonighter\Facebook\Messenger\Send\VO\Message\Message;
use Cryonighter\Facebook\Messenger\Send\VO\MessageTag;
use Cryonighter\Facebook\Messenger\Send\VO\NotificationType;
use Cryonighter\Facebook\Messenger\Send\VO\Recipient\Recipient;
use Cryonighter\Facebook\Messenger\Send\VO\MessagingType;

class MessageRequest extends Request
{
    /**
     * @var Recipient
     */
    private $recipient;

    /**
     * @var Message
     */
    private $message;

    /**
     * @var MessagingType
     */
    private $messagingType;

    /**
     * @var NotificationType
     */
    private $notificationType;

    /**
     * @var MessageTag | null
     */
    private $tag;

    /**
     * @param Recipient         $recipient
     * @param Message           $message
     * @param MessagingType     $messagingType
     * @param NotificationType  $notificationType
     * @param MessageTag | null $tag
     */
    public function __construct(
        Recipient $recipient,
        Message $message,
        MessagingType $messagingType,
        NotificationType $notificationType,
        MessageTag $tag = null
    ) {
        $this->recipient = $recipient;
        $this->message = $message;
        $this->messagingType = $messagingType;
        $this->notificationType = $notificationType;
        $this->tag = $tag;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'messaging_type' => $this->messagingType,
            'recipient' => $this->recipient,
            'message' => $this->message,
            'notification_type' => $this->notificationType,
            'tag' => $this->tag,
        ];
    }
}