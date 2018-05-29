<?php

namespace Cryonighter\Facebook\Messenger\VO\Payload;

use Cryonighter\Facebook\Messenger\VO\Type\TemplateType;
use JsonSerializable;

abstract class Template implements Payload, JsonSerializable
{
    /**
     * @var TemplateType
     */
    private $templateType;

    /**
     * @param TemplateType $templateType
     */
    protected function __construct(TemplateType $templateType)
    {
        $this->templateType = $templateType;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return ['template_type' => $this->templateType];
    }
}
