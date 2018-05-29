<?php

namespace Cryonighter\Facebook\Messenger\VO\Recipient;

use Cryonighter\Facebook\Messenger\VO\Name;
use Cryonighter\Facebook\Messenger\VO\PhoneNumber;

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