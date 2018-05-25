<?php

namespace Cryonighter\Facebook\Messenger\Send\VO\Recipient;

use Cryonighter\Facebook\Messenger\Send\VO\Name;
use Cryonighter\Facebook\Messenger\Send\VO\PhoneNumber;

class RecipientPhoneNumber extends Recipient
{
    /**
     * @var PhoneNumber
     */
    private $phoneNumber;

    /**
     * @var Name
     */
    private $name;

    /**
     * @param PhoneNumber $phoneNumber
     * @param Name        $name
     */
    public function __construct(PhoneNumber $phoneNumber, Name $name = null)
    {
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'phone_number' => $this->phoneNumber,
            'name' => $this->name,
        ];
    }
}