<?php

namespace Cryonighter\Facebook\Messenger\Request;

use Cryonighter\Facebook\Messenger\VO\Message\Message;
use Cryonighter\Facebook\Messenger\VO\Tag;
use Cryonighter\Facebook\Messenger\VO\Type\MessagingType;
use Cryonighter\Facebook\Messenger\VO\Type\NotificationType;
use Cryonighter\Facebook\Messenger\VO\Recipient\Recipient;

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
     * @var Tag | null
     */
    private $tag;

    /**
     * @param Recipient        $recipient
     * @param Message          $message
     * @param MessagingType    $messagingType
     * @param NotificationType $notificationType
     * @param Tag | null       $tag
     */
    public function __construct(
        Recipient $recipient,
        Message $message,
        MessagingType $messagingType,
        NotificationType $notificationType,
        Tag $tag = null
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