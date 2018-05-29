<?php

namespace Cryonighter\Facebook\Messenger\VO\Recipient;

use Cryonighter\Facebook\Messenger\Exception\ValueException;

class RecipientId extends Recipient
{
    /**
     * @var string
     */
    private $id;

    /**
     * @param string $id
     *
     * @throws ValueException
     */
    public function __construct(string $id)
    {
        if (!preg_match('/^\d+$/', $id)) {
            throw new ValueException('Invalid argument value');
        }

        $this->id = $id;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return ['id' => $this->id];
    }
}
