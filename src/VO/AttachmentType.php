<?php

namespace Cryonighter\Facebook\Messenger\Send\VO;

use Cryonighter\Facebook\Messenger\Send\Exception\ValueException;
use JsonSerializable;

class AttachmentType implements JsonSerializable
{
    use OneValueTrait;

    public const TYPE_TEMPLATE = 'template';
    public const TYPE_IMAGE = 'image';
    public const TYPE_VIDEO = 'video';
    public const TYPE_AUDIO = 'audio';
    public const TYPE_FILE = 'file';

    private const TYPES = [
        self::TYPE_TEMPLATE,
        self::TYPE_IMAGE,
        self::TYPE_VIDEO,
        self::TYPE_AUDIO,
        self::TYPE_FILE,
    ];

    /**
     * @param string $value
     *
     * @throws ValueException
     */
    public function __construct(string $value)
    {
        if (!in_array($value, self::TYPES)) {
            throw new ValueException('Invalid argument value');
        }

        $this->value = $value;
    }
}