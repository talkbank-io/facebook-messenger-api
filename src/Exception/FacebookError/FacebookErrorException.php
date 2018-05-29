<?php

namespace Cryonighter\Facebook\Messenger\Exception\FacebookError;

use Exception;

class FacebookErrorException extends Exception
{
    /**
     * @var string
     */
    private $fbtraceId;

    /**
     * @var int | null
     */
    private $subcode;

    /**
     * @var string
     */
    private $type;

    /**
     * @param string     $message
     * @param int        $code
     * @param Exception  $previous
     * @param string     $fbtraceId
     * @param int | null $subcode
     */
    public function __construct($message, $code, Exception $previous, string $fbtraceId, ?int $subcode, string $type)
    {
        parent::__construct($message, $code, $previous);

        $this->fbtraceId = $fbtraceId;
        $this->subcode = $subcode;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getFbtraceId(): string
    {
        return $this->fbtraceId;
    }

    /**
     * @return int | null
     */
    public function getSubcode(): ?int
    {
        return $this->subcode;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
