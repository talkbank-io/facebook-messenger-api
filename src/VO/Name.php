<?php

namespace Cryonighter\Facebook\Messenger\VO;

use JsonSerializable;

class Name implements JsonSerializable
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
        ];
    }
}