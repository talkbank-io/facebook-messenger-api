<?php

namespace Cryonighter\Facebook\Messenger\VO\Type;

class AttachmentType extends Type
{
    public const TYPE_TEMPLATE = 'template';
    public const TYPE_IMAGE = 'image';
    public const TYPE_VIDEO = 'video';
    public const TYPE_AUDIO = 'audio';
    public const TYPE_FILE = 'file';

    /**
     * @return array
     */
    protected static function getTypes(): array
    {
        return [
            self::TYPE_TEMPLATE,
            self::TYPE_IMAGE,
            self::TYPE_VIDEO,
            self::TYPE_AUDIO,
            self::TYPE_FILE,
        ];
    }
}
