<?php

namespace Cryonighter\Facebook\Messenger\VO\Recipient;

class RecipientUserRef extends Recipient
{
    /**
     * @var string
     */
    private $userRef;

    /**
     * @param string $userRef
     */
    public function __construct(string $userRef)
    {
        $this->userRef = $userRef;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return ['id' => $this->userRef];
    }
}
