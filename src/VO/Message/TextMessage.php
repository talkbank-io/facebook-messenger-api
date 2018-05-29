<?php

namespace Cryonighter\Facebook\Messenger\VO\Message;

use Cryonighter\Facebook\Messenger\VO\Text;
use Cryonighter\Facebook\Messenger\VO\QuickReply\QuickReply;

class TextMessage extends Message
{
    /**
     * @var Text
     */
    private $text;

    /**
     * @var array | QuickReply[]
     */
    private $quickReplies;

    /**
     * @param Text                 $text
     * @param array | QuickReply[] ...$quickReplies
     */
    public function __construct(Text $text, QuickReply ...$quickReplies)
    {
        $this->text = $text;
        $this->quickReplies = $quickReplies;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return ['text' => $this->text] + (empty($this->quickReplies) ? [] : ['quick_replies' => $this->quickReplies]);
    }
}
