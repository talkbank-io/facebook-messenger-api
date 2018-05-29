<?php

namespace Cryonighter\Facebook\Messenger\VO\Attachment;

use Cryonighter\Facebook\Messenger\VO\Payload\Payload;
use Cryonighter\Facebook\Messenger\VO\Type\AttachmentType;
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
