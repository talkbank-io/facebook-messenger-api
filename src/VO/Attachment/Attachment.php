<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\Attachment;

use Cryonighter\Facebook\Messenger\Send\VO\Payload\Payload;
use Cryonighter\Facebook\Messenger\Send\VO\Type\AttachmentType;
use JsonSerializable;

class Attachment implements JsonSerializable
{
    /**
     * @var AttachmentType
     */
    private $type;

    /**
     * @var Payload
     */
    private $payload;

    /**
     * @param Payload        $payload
     * @param AttachmentType $type
     */
    public function __construct(Payload $payload, AttachmentType $type)
    {
        $this->payload = $payload;
        $this->type = $type;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'type' => $this->type,
            'payload' => $this->payload,
        ];
    }
}
